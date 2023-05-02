/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import entities.Reclamation;
import java.net.URL;
import java.time.Instant;
import java.time.LocalDate;
import java.time.ZoneId;
import java.util.Date;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import services.ReclamationService;

/**
 *
 * @author Mega-PC
 */
public class FXMLDocumentController implements Initializable {
    
    @FXML
    private TextField user_id;

    @FXML
    private TextField assist_id;

    @FXML
    private TextField sujet;

    @FXML
    private TextField etat;

    @FXML
    private TextArea contenu;

    @FXML
    private DatePicker date_rec;
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
    
    
    @FXML
    void ajouterReclamation(ActionEvent event){
        int user_idd=Integer.parseInt(user_id.getText());
        int assist_idd=Integer.parseInt(assist_id.getText());
        Date date=null;
        try{
            LocalDate localDate = date_rec.getValue();
            if(localDate != null){
                Instant instant = Instant.from(localDate.atStartOfDay(ZoneId.systemDefault()));
                date=Date.from(instant);
            }
        }catch(Exception c){
            c.printStackTrace();
        }
        
        String sujett=sujet.getText();
        String contenuu=contenu.getText();
        String etatt=etat.getText();
        
        Reclamation r = new Reclamation(
                user_idd,assist_idd,date,sujett,contenuu,etatt
            );
        
        ReclamationService rs= new ReclamationService();
        rs.ajouter(r);
        
    }
}
