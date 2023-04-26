/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import static Services.PasswordHasher.checkPassword;
import Services.UtilisateurServices;
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
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class ChangerpwdController implements Initializable {

    @FXML
    private HBox itemC12;
    @FXML
    private TextField mdp;
    @FXML
    private HBox itemC121;
    @FXML
    private TextField mdp1;
    @FXML
    private HBox itemC1211;
    @FXML
    private TextField mdp2;
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
    private void modif(ActionEvent event) {
        if( checkPassword(mdp.getText(),NewFXMain.connecteduser.getPassword())){
            UtilisateurServices us = new UtilisateurServices();
            if(us.updatePwd(mdp1.getText(),NewFXMain.connecteduser.getId() )){
                    try {
                NewFXMain.m = 0;
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
    }
    
}
