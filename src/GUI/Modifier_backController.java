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
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.ZoneId;
import java.sql.Date;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class Modifier_backController implements Initializable {

    @FXML
    private HBox itemC12;
    @FXML
    private TextField nom;
    @FXML
    private TextField prenom;
    @FXML
    private HBox itemC121;
    @FXML
    private TextField email;
    @FXML
    private TextField tel;
    @FXML
    private HBox itemC1211;
    @FXML
    private TextField adresse;
    @FXML
    private DatePicker date;
    @FXML
    private HBox itemC11111;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
     nom.setText(NewFXMain.connecteduser.getNom());
     prenom.setText(NewFXMain.connecteduser.getPrenom());
     email.setText(NewFXMain.connecteduser.getEmail());
     adresse.setText(NewFXMain.connecteduser.getAddresse());
     tel.setText(Integer.toString(NewFXMain.connecteduser.getTel()));
    }    

    @FXML
    private void modif(ActionEvent event) {
        NewFXMain.connecteduser.setNom(nom.getText());
        NewFXMain.connecteduser.setPrenom(prenom.getText());
        NewFXMain.connecteduser.setEmail(email.getText());
        NewFXMain.connecteduser.setAddresse(adresse.getText());
        NewFXMain.connecteduser.setTel(Integer.parseInt(tel.getText()));
        LocalDate localDate = date.getValue();
java.sql.Date sqlDate = java.sql.Date.valueOf(localDate); 
        NewFXMain.connecteduser.setDate_naiss(sqlDate);
        UtilisateurServices us = new UtilisateurServices();
        if(us.updateUser(NewFXMain.connecteduser,NewFXMain.connecteduser.getId()))
        {
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
