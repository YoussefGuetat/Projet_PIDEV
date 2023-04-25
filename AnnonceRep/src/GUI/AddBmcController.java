/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Annonce;
import Service.AnnonceService;
import Service.BmcService;
import com.gluonhq.charm.glisten.control.TextField;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
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
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.ListCell;
import javafx.scene.control.ListView;
import javafx.stage.Stage;
import javafx.util.Callback;

/**
 * FXML Controller class
 *
 * @author hgygz
 */
public class AddBmcController implements Initializable {

    @FXML
    private TextField partenairesclesfield;

    @FXML
    private TextField activitesclesfield;

    @FXML
    private TextField ressourcesclesfield;

    @FXML
    private TextField propvaleursfield;

    @FXML
    private TextField relationclientsfield;

    @FXML
    private TextField canauxfield;

    @FXML
    private TextField segmarchefield;

    @FXML
    private TextField coutsfield;

    @FXML
    private TextField revenusfield;

    
    @Override
public void initialize(URL url, ResourceBundle rb) {
    AnnonceService annonceService = new AnnonceService();
    try {
        List<Annonce> annonces = annonceService.afficherListe();
        annoncefield.setItems(FXCollections.observableArrayList(annonces));
    } catch (SQLException e) {
        // Handle the exception here
    }
}

    
 @FXML
private ComboBox<Annonce> annoncefield;

@FXML
private void ajouterBmc(ActionEvent event) throws SQLException {
    try {
  
    
    String partenaires_cles = partenairesclesfield.getText().trim();
    String activites_cles = activitesclesfield.getText().trim();
    String ressources_cles = ressourcesclesfield.getText().trim();
    String proposition_valeur = propvaleursfield.getText().trim();
    String relations_clients = relationclientsfield.getText().trim();
    String canaux = canauxfield.getText().trim();
    String segments_marche = segmarchefield.getText().trim();
    String couts_str = coutsfield.getText().trim();
    double couts = 0.0;
    if (!couts_str.isEmpty()) {
        couts = Double.parseDouble(couts_str);
    }
    
    String revenus_str = revenusfield.getText().trim();
    double revenus = 0.0;
    if (!revenus_str.isEmpty()) {
        revenus = Double.parseDouble(revenus_str);
    }

    if (partenaires_cles.isEmpty() || activites_cles.isEmpty() || ressources_cles.isEmpty() || 
            proposition_valeur.isEmpty() || relations_clients.isEmpty() || canaux.isEmpty() || 
            segments_marche.isEmpty() || couts_str.isEmpty() || revenus_str.isEmpty()) {
        // Show an alert informing the user that all fields are required
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("Champs obligatoires");
        alert.setHeaderText("Tous les champs sont obligatoires");
        alert.setContentText("Veuillez remplir tous les champs.");
        alert.showAndWait();
        return;
    }

  Annonce selectedAnnonce = annoncefield.getValue();

    // Check if the selected Annonce already has a BMC
    if (selectedAnnonce.getBmc() != null) {
        // Show an alert informing the user that a BMC already exists for the selected Annonce
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("BMC déjà ajouté");
        alert.setHeaderText("BMC déjà existant");
        alert.setContentText("Un BMC a déjà été ajouté pour cette annonce. Vous ne pouvez ajouter qu'un seul BMC par annonce.");
        alert.showAndWait();
        return;
    }

    Annonce.Bmc bmc = selectedAnnonce.new Bmc(); 

    // create an instance of Annonce.Bmc and set the field values
    bmc.setPartenaires_cles(partenaires_cles);
    bmc.setActivites_cles(activites_cles);
    bmc.setRessources_cles(ressources_cles);
    bmc.setProposition_valeur(proposition_valeur);
    bmc.setRelations_clients(relations_clients);
    bmc.setCanaux(canaux);
    bmc.setSegments_marche(segments_marche);
    bmc.setCouts(couts);
    bmc.setRevenus(revenus);

    // set the Annonce object of the Bmc object to the selected Annonce
    bmc.setAnnonce(selectedAnnonce);

    // call the ajouterBmc() method of BmcService to add the Bmc to the database
    BmcService bmcService = new BmcService();
    bmcService.ajouterBmc(bmc, selectedAnnonce.getId());

    // Show an alert confirming that the BMC was successfully added
    Alert alert = new Alert(Alert.AlertType.INFORMATION);
    alert.setTitle("BMC publié");
    alert.setHeaderText("Publié");
    alert.setContentText("Le BMC a été publié avec succès.");
    alert.showAndWait();
} catch (Exception e) {
    e.printStackTrace();
}
}







@FXML
void addback(ActionEvent event){
     try {
        // Load stats.fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Annonce.fxml"));
        Parent root = loader.load();
        Scene scene = new Scene(root);

        // Get the current window
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();

        // Set the scene in the current window
        stage.setScene(scene);

    } catch (IOException e) {
        e.printStackTrace();
    }

}


}
