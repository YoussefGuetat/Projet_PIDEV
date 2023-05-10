/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.net.URL;
import java.util.HashMap;
import java.util.Map;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import org.controlsfx.control.textfield.TextFields;

/**
 * FXML Controller class
 *
 * @author dhafeur
 */
public class ChatController implements Initializable {
    @FXML
    private AnchorPane an;
    @FXML
    private TextArea textchat;
    @FXML
    private TextField ASK;
     @FXML
    private HBox hp;
    @FXML
    private HBox ha;
    @FXML
    private HBox he;
    @FXML
    private HBox hr;
    @FXML
    private HBox hl;
private Map<String, String> responses;
   
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        responses = new HashMap<>();
        // TODO
         responses.put("bonjour", "comment puis je vous aidez");
        responses.put("donner moi les nombres des rendez-vous? ", "100");
        responses.put("donnez moi le nombre des entrepreneur", "95");
        responses.put("salut bot", "comment puis je vous aidez? ");
         responses.put("qui etes vous?", "je suis un bot creer par devil's ");
          responses.put("AppMonsters", "nous sommes une equipe de cinq membres qui fait une application SandBox  ");
             TextFields.bindAutoCompletion(ASK, responses.keySet());
           TextField textField =  TextFields.createClearablePasswordField();
    hp.setOnMouseEntered(event -> {
            hp.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        hp.setOnMouseExited(event -> {
            hp.setStyle("-fx-background-color : transparent");
        });
        ha.setOnMouseEntered(event -> {
            ha.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        ha.setOnMouseExited(event -> {
            ha.setStyle("-fx-background-color : transparent");
        });
        he.setOnMouseEntered(event -> {
            he.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        he.setOnMouseExited(event -> {
            he.setStyle("-fx-background-color : transparent");
        });
        hr.setOnMouseEntered(event -> {
            hr.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        hr.setOnMouseExited(event -> {
            hr.setStyle("-fx-background-color : transparent");
        });
        hl.setOnMouseEntered(event -> {
            hl.setStyle("-fx-background-color :  #efefef;-fx-background-radius :  10");
        });
        hl.setOnMouseExited(event -> {
            hl.setStyle("-fx-background-color : transparent");
        });
    }    

    @FXML
    private void UserA(ActionEvent event) {
       String input = ASK.getText();
        String response = responses.getOrDefault(input, "désolé j'ai pas la réponse ");
        textchat.appendText("Utilisateur: " + input + "\n");
        textchat.appendText("Chatbot: " + response + "\n\n");
        ASK.clear();}
    
}