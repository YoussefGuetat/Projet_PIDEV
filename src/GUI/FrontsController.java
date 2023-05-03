/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class FrontsController implements Initializable {

    @FXML
    private HBox hp;
    @FXML
    private HBox ha;
    @FXML
    private HBox he;
    @FXML
    private HBox hr;
    @FXML
    private HBox hl;
    @FXML
    private VBox c1;
    @FXML
    private VBox c2;
    @FXML
    private VBox c3;
    @FXML
    private VBox c4;
    @FXML
    private VBox modifier;
    @FXML
    private VBox pwd;
    @FXML
    private VBox photo;
    @FXML
    private Label name;
    @FXML
    private Label email;
    @FXML
    private Label role;
    @FXML
    private Label adresse;
    @FXML
    private Label tel;
    @FXML
    private Label date;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        hp.setOnMouseEntered(event -> {
            hp.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        hp.setOnMouseExited(event -> {
            hp.setStyle("-fx-background-color : transparent");
        });
        ha.setOnMouseEntered(event -> {
            ha.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        ha.setOnMouseExited(event -> {
            ha.setStyle("-fx-background-color : transparent");
        });
        he.setOnMouseEntered(event -> {
            he.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        he.setOnMouseExited(event -> {
            he.setStyle("-fx-background-color : transparent");
        });
        hr.setOnMouseEntered(event -> {
            hr.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        hr.setOnMouseExited(event -> {
            hr.setStyle("-fx-background-color : transparent");
        });
        hl.setOnMouseEntered(event -> {
            hl.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        hl.setOnMouseExited(event -> {
            hl.setStyle("-fx-background-color : transparent");
        });
        c1.setOnMouseEntered(event -> {
            c1.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        c1.setOnMouseExited(event -> {
            c1.setStyle("-fx-background-color : #fff");
        });
        c2.setOnMouseEntered(event -> {
            c2.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        c2.setOnMouseExited(event -> {
            c2.setStyle("-fx-background-color : #fff");
        });
        c3.setOnMouseEntered(event -> {
            c3.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        c3.setOnMouseExited(event -> {
            c3.setStyle("-fx-background-color : #fff");
        });
        c4.setOnMouseEntered(event -> {
            c4.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        c4.setOnMouseExited(event -> {
            c4.setStyle("-fx-background-color : #fff");
        });
        modifier.setOnMouseEntered(event -> {
            modifier.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        modifier.setOnMouseExited(event -> {
            modifier.setStyle("-fx-background-color : #fff");
        });
        pwd.setOnMouseEntered(event -> {
            pwd.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        pwd.setOnMouseExited(event -> {
            pwd.setStyle("-fx-background-color : #fff");
        });
        photo.setOnMouseEntered(event -> {
            photo.setStyle("-fx-background-color: #EC505C;-fx-background-radius :  10");
        });
        photo.setOnMouseExited(event -> {
            photo.setStyle("-fx-background-color : #fff");
        });
        
                name.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
                email.setText(NewFXMain.connecteduser.getEmail());
                role.setText(NewFXMain.connecteduser.getRole());
                tel.setText("55025447");
                adresse.setText(NewFXMain.connecteduser.getAddresse());
                date.setText(NewFXMain.connecteduser.getDate_naiss().toString());

    }
@FXML
    private void btnSignout(MouseEvent event) {
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
