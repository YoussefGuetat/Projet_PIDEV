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
import javafx.animation.TranslateTransition;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.layout.VBox;
import javafx.util.Duration;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class LoginController implements Initializable {

    @FXML
    private VBox vbox;
    private Parent fxml;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        TranslateTransition t = new TranslateTransition(Duration.seconds(1),vbox);
        t.setToX(vbox.getLayoutX() * 33);
        t.play();
        t.setOnFinished((e)->{
            try {
                if(NewFXMain.page==1)
                fxml = FXMLLoader.load(getClass().getResource("ForgetPassword.fxml"));
                else if(NewFXMain.page==2)
                    fxml = FXMLLoader.load(getClass().getResource("CodePass.fxml"));
                                else if(NewFXMain.page==3)
                    fxml = FXMLLoader.load(getClass().getResource("changeForget.fxml"));
                else
                fxml = FXMLLoader.load(getClass().getResource("Singin.fxml"));
                vbox.getChildren().removeAll();
                vbox.getChildren().setAll(fxml);
            } catch (IOException ex) {
                Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
    }    

    @FXML
    private void on_signup(ActionEvent event) {
                TranslateTransition t = new TranslateTransition(Duration.seconds(1),vbox);
        t.setToX(14);
        t.play();
        t.setOnFinished((e)->{
            try {
                fxml = FXMLLoader.load(getClass().getResource("Signup.fxml"));
                vbox.getChildren().removeAll();
                vbox.getChildren().setAll(fxml);
            } catch (IOException ex) {
                Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
    }

    @FXML
    private void on_signin(ActionEvent event) {
                TranslateTransition t = new TranslateTransition(Duration.seconds(1),vbox);
        t.setToX(vbox.getLayoutX() * 33);
        t.play();
        t.setOnFinished((e)->{
            try {
                fxml = FXMLLoader.load(getClass().getResource("Singin.fxml"));
                vbox.getChildren().removeAll();
                vbox.getChildren().setAll(fxml);
            } catch (IOException ex) {
                Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
    }
    
}
