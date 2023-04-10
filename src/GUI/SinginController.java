/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Utilisateur;
import Services.UtilisateurServices;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.Optional;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.animation.TranslateTransition;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TextField;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import pidev_desk.NewFXMain;
import utils.MyDB;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class SinginController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
private TextField emailField;
private TextField passwordField;
    
        private VBox vbox;
    private Parent fxml;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
@FXML
private void signin(ActionEvent event) throws SQLException, IOException {
    UtilisateurServices Us = new UtilisateurServices();
    Utilisateur p1 = new Utilisateur();
    if(Us.login(emailField.getText(),passwordField.getText()) != null){
        try {
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("Home.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
@FXML
private void forget1(ActionEvent event) throws IOException{
          NewFXMain.page=1;
        Parent root = FXMLLoader.load(getClass().getResource("Login.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
}

 
}

    
    

