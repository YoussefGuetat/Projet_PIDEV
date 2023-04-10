/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Utilisateur;
import Services.UtilisateurServices;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextField;

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
    private TextField prenom;
        @FXML
    private TextField email;
        @FXML
    private TextField pwd;

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
         Utilisateur p1 = new Utilisateur(nom.getText(),prenom.getText(),email.getText(),pwd.getText(),comb.getSelectionModel().getSelectedItem().toString(),true);
         if(Us.isEmailUnique(p1.getEmail())){
         Us.signUp(p1);
         }
    }
    
}
