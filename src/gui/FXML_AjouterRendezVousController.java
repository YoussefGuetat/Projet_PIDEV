package gui;

import entites.RendezVous;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.sql.SQLException;
import java.util.ResourceBundle;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import services.RendezVousService;

public class FXML_AjouterRendezVousController implements Initializable {
    
    
    
    @FXML
    private DatePicker dateRdvPicker;
    
    @FXML
    private TextField etatField;
    
    @FXML
    private TextField messageField;
    
    @FXML
    private TextField typeLieuField;
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

    @Override
    public void initialize(URL url, ResourceBundle rb) {
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
    private void handleAjouterRendezVous(ActionEvent event) {
        // Récupération des données du formulaire
       // Récupération des données du formulaire
    if (dateRdvPicker.getValue() == null) {
        // Vérification si une date est sélectionnée
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner une date valide.");
        alert.showAndWait();
        return;
    }
    
    if (dateRdvPicker.getValue() == null || etatField.getText().isEmpty() || messageField.getText().isEmpty() || typeLieuField.getText().isEmpty()) {
        // Vérification si tous les champs sont remplis
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez remplir tous les champs obligatoires.");
        alert.showAndWait();
        return;
    }

    

      // Conversion de la valeur du DatePicker en objet Date
        Date dateRdv = Date.valueOf(dateRdvPicker.getValue());
        String etat = etatField.getText();
        String message = messageField.getText();
        String typeLieu = typeLieuField.getText();

        // Création d'un objet RendezVous
        RendezVous rendezVous = new RendezVous( dateRdv, etat, message, typeLieu);

        // Appel de la méthode d'ajout du rendez-vous dans la base de données
        RendezVousService rendezVousService = new RendezVousService();
        rendezVousService.ajouterRendezVous(rendezVous);

        // Affichage d'une alerte pour indiquer que le rendez-vous a été ajouté avec succès
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Ajout de rendez-vous");
        alert.setHeaderText(null);
        alert.setContentText("Le rendez-vous a été ajouté avec succès !");
        alert.showAndWait();

        // Redirection vers le fichier FXML_AfficherRendezVous.fxml
        try {
            Parent afficherRendezVousParent = FXMLLoader.load(getClass().getResource("/gui/FXML_AfficherRendezVous.fxml"));
            Scene afficherRendezVousScene = new Scene(afficherRendezVousParent);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(afficherRendezVousScene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
