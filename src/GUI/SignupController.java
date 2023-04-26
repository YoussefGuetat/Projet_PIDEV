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
import static java.time.Clock.system;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class SignupController implements Initializable {

    @FXML
    private ComboBox comb;
        @FXML
    private TextField nom;
        @FXML
    private TextField nom1;
        @FXML
    private TextField email;
        @FXML
    private TextField pwd;
        @FXML
    private Label Cnom;
        @FXML
    private Label Cnom1;
        @FXML
    private Label Cemail;
        @FXML
    private Label Cpassword;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ObservableList<String> list = FXCollections.observableArrayList("investisseur","entrepreneur");
        comb.setItems(list);
    }    

    @FXML
    private void select(ActionEvent event) {
        String role = comb.getSelectionModel().getSelectedItem().toString();
    }
        @FXML
    private void signup(ActionEvent event) throws SQLException {
         UtilisateurServices Us = new UtilisateurServices();
         Utilisateur p1 = new Utilisateur(nom.getText(),nom1.getText(),email.getText(),pwd.getText(),comb.getSelectionModel().getSelectedItem().toString(),true);
         if(nom.getText().isEmpty() || email.getText().isEmpty() || pwd.getText().length() < 8 || !pwd.getText().matches(".*\\d.*") || pwd.getText().isEmpty()){
         if(nom.getText().isEmpty()){
             Cnom.setText("Champs nom vide");
         }
             else{
             Cnom.setText("");
         }
         if(nom1.getText().isEmpty()){
             Cnom1.setText("Champs prenom vide");
         }
             else{
             Cnom1.setText("");
         }
         if(email.getText().isEmpty()){
             Cemail.setText("Champs email vide");
         }
         else if(!email.getText().matches("[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}")){
             Cemail.setText("Email pas valide");
         }
             else{
             Cemail.setText("");
         }

         if (pwd.getText().isEmpty()) {
             Cpassword.setText("Champs vide");
         }
         else if (pwd.getText().length() < 8) {
             Cpassword.setText("at least 8 characters long.");
         }
         else if (!pwd.getText().matches(".*\\d.*")) {
             Cpassword.setText(" at least one digit.");
         }
         else{
             Cpassword.setText("");
         }
         }
         else {
             if(Us.isEmailUnique(p1.getEmail())){
                 Us.signUp(p1);
                                try {
                NewFXMain.page=0;
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
         
    }
    
}
