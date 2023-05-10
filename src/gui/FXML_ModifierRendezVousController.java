package gui;

import java.net.URL;
import java.sql.Date;
import java.util.ResourceBundle;

import entites.RendezVous;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import services.RendezVousService;

public class FXML_ModifierRendezVousController implements Initializable {

    @FXML
    private TextField txtId;
    @FXML
    private DatePicker datePickerDateRdv;
    @FXML
    private TextField txtEtat;
    @FXML
    private TextField txtMessage;
    @FXML
    private TextField txtTypeLieu;
    @FXML
    private Button btnValider;
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

    private RendezVous selectedRendezVous;
    private RendezVousService rendezVousService = new RendezVousService();

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

    public void setRendezVous(RendezVous rendezVous) {
        this.selectedRendezVous = rendezVous;
        loadRendezVousData();
    }

    @FXML
    private void handleBtnValider(ActionEvent event) {
        // Vérifier que les champs de texte sont remplis
    if (datePickerDateRdv.getValue() == null ||
            txtEtat.getText().isEmpty() || txtMessage.getText().isEmpty() || txtTypeLieu.getText().isEmpty()) {
        // Afficher une alerte pour indiquer que tous les champs doivent être remplis
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez remplir tous les champs !");
        alert.showAndWait();
        return;
    }
        // Mettre à jour les données du rendez-vous sélectionné avec les nouvelles données saisies
        selectedRendezVous.setDate_rdv(Date.valueOf(datePickerDateRdv.getValue()));
        selectedRendezVous.setEtat(txtEtat.getText());
        selectedRendezVous.setMessage(txtMessage.getText());
        selectedRendezVous.setType_lieu(txtTypeLieu.getText());
        // Appeler la méthode de mise à jour du rendez-vous dans la base de données
        rendezVousService.mettreAJourRendezVous(selectedRendezVous);
        // Fermer la fenêtre de modification du rendez-vous
        btnValider.getScene().getWindow().hide();
    }

    private void loadRendezVousData() {
        // Charger les données du rendez-vous sélectionné dans les champs correspondants
        datePickerDateRdv.setValue(selectedRendezVous.getDate_rdv().toLocalDate());
        txtEtat.setText(selectedRendezVous.getEtat());
        txtMessage.setText(selectedRendezVous.getMessage());
        txtTypeLieu.setText(selectedRendezVous.getType_lieu());
    }

}
