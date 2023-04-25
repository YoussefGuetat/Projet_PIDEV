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
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.ListCell;
import javafx.scene.control.ListView;
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
    double couts = Double.parseDouble(coutsfield.getText().trim());
    double revenus = Double.parseDouble(revenusfield.getText().trim());

  Annonce selectedAnnonce = annoncefield.getValue();
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
} catch (Exception e) {
e.printStackTrace();
}
}}
