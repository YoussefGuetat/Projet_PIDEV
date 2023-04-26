/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

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
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class CodePassController implements Initializable {

    @FXML
    private TextField codeField;
    @FXML
    private Button code;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void code(ActionEvent event) throws IOException {
        UtilisateurServices Us = new UtilisateurServices();
        int id = Us.isTokenExist(codeField.getText()) ;
        if ( id != 0)
        {
           NewFXMain.page=3;
           NewFXMain.idd = id;
        Parent root = FXMLLoader.load(getClass().getResource("Login.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        }
        else{
            System.out.println("leee");
        }
    }
    
}
