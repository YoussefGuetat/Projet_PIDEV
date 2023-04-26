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
import javafx.scene.image.Image;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class ItemPController implements Initializable {

    @FXML
    private HBox itemC1;
    @FXML
    private Label nom1;
    @FXML
    private Label name;
    @FXML
    private Label role1;
    @FXML
    private Label rolep;
    @FXML
    private HBox itemC11;
    @FXML
    private Label nom11;
    @FXML
    private Label emailp;
    @FXML
    private Label role11;
    @FXML
    private Label adresse;
    @FXML
    private HBox itemC111;
    @FXML
    private Label nom111;
    @FXML
    private Label naiss;
    @FXML
    private Label email1112;
    @FXML
    private Label tel;
    @FXML
    private HBox itemC11111;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void modif(ActionEvent pevent) throws IOException {
            try {
                NewFXMain.m = 1;
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("/GUI/Home.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) pevent.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException | NullPointerException e) {
            e.printStackTrace();
        }
            
    }

    @FXML
    private void img(ActionEvent event) {
    }

    @FXML
    private void pwd(ActionEvent event) {
                    try {
                NewFXMain.m = 2;
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("/GUI/Home.fxml"));
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
