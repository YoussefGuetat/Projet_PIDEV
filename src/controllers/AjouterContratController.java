/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controllers;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author akrem
 */
public class AjouterContratController implements Initializable {

    @FXML
    private DatePicker date_contrat_field;
    @FXML
    private TextField duree_contrat_field;
    @FXML
    private TextField taux_profit_field;
    @FXML
    private ComboBox<?> id_rendez_vous_field;
    @FXML
    private Button ajouter_contrat_button;
    @FXML
    private Button choisir_image_button;
    @FXML
    private Label image_label;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void ajouterContrat(ActionEvent event) {
    }

    @FXML
    private void choisirImage(ActionEvent event) {
    }
    
}
