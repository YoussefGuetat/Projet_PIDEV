package gui;

import static com.sun.org.apache.xalan.internal.lib.ExsltDatetime.date;
import static com.sun.org.apache.xalan.internal.lib.ExsltDatetime.date;
import entites.Contrat;
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
import services.ContratService;
import services.RendezVousService;

public class FXML_ModifierContratController implements Initializable {

    
    
   
    private TextField txtDureeContrat;
   
    private TextField txtTauxProfit;
    @FXML
    private Button btnValider;

    private Contrat selectedContrat;
    private ContratService ContratService = new ContratService();
    @FXML
    private TextField tfDureeContrat;
    @FXML
    private TextField tfTauxProfit;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // ...
    }

    public void setContrat(Contrat Contrat) {
        this.selectedContrat = Contrat;
        loadContratData();
    }

    private void handleBtnValider(ActionEvent event) {
        // Vérifier que les champs de texte sont remplis
    if (
            txtDureeContrat.getText().isEmpty() ||  txtTauxProfit.getText().isEmpty()) {
        // Afficher une alerte pour indiquer que tous les champs doivent être remplis
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez remplir tous les champs !");
        alert.showAndWait();
        return;
    }
        // Mettre à jour les données du rendez-vous sélectionné avec les nouvelles données saisies
        selectedContrat.setDuree_contrat(Integer.parseInt(txtDureeContrat.getText()));
        selectedContrat.setTaux_profit(Float.parseFloat(txtTauxProfit.getText()));
        // Appeler la méthode de mise à jour du rendez-vous dans la base de données
        ContratService.modifierContrat(selectedContrat);
        // Fermer la fenêtre de modification du rendez-vous
        btnValider.getScene().getWindow().hide();
    }

    private void loadContratData() {
    // Charger les données du rendez-vous sélectionné dans les champs correspondants
    txtDureeContrat.setText(String.valueOf(selectedContrat.getDuree_contrat()));
    txtTauxProfit.setText(String.valueOf(selectedContrat.getTaux_profit()));
}


}
