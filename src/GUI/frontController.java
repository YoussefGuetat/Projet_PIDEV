/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class frontController implements Initializable {

    private ImageView adminIMG;
    private Label username;
    private VBox pnItems;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
             Image image = new Image("/GUI/images/joseph.png");
         adminIMG.setImage(image);
        username.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
        Node[] nodes = new Node[1];
        try {
            nodes[0] = FXMLLoader.load(getClass().getResource("/GUI/ItemP.fxml"));
                //give the items some effect
                Label nlabel = (Label) nodes[0].lookup("#name");
                nlabel.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
                Label elabel = (Label) nodes[0].lookup("#emailp");
                elabel.setText(NewFXMain.connecteduser.getEmail());
                Label rlabel = (Label) nodes[0].lookup("#rolep");
                rlabel.setText(NewFXMain.connecteduser.getRole());
                Label tlabel = (Label) nodes[0].lookup("#tel");
                tlabel.setText("55025447");
                Label alabel = (Label) nodes[0].lookup("#adresse");
                alabel.setText(NewFXMain.connecteduser.getAddresse());
                Label dlabel = (Label) nodes[0].lookup("#naiss");
                dlabel.setText(NewFXMain.connecteduser.getDate_naiss().toString());
                nodes[0].setOnMouseEntered(event -> {
                    nodes[0].setStyle("-fx-background-color : #0A0E3F");
                });
                nodes[0].setOnMouseExited(event -> {
                    nodes[0].setStyle("-fx-background-color : #02030A");
                });
                pnItems.getChildren().add(nodes[0]);
                   } catch (IOException ex) {
            Logger.getLogger(frontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    


    private void btnSignout(ActionEvent event) {
                pnItems.getChildren().clear();
          try {
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("/GUI/Login.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException | NullPointerException e) {
            e.printStackTrace();
        }
    }
    
}
