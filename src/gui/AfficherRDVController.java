/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import entites.RendezVous;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import services.RendezVousService;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class AfficherRDVController implements Initializable {

@FXML
    private TableView<RendezVous> tableRendezVous;
    @FXML
    private TableColumn<RendezVous, Integer> colId;
    @FXML
    private TableColumn<RendezVous, Date> colDateRdv;
    @FXML
    private TableColumn<RendezVous, String> colEtat;
    @FXML
    private TableColumn<RendezVous, String> colMessage;
    @FXML
    private TableColumn<RendezVous, String> colTypeLieu;
    @FXML
    private Button btnModifier;
    @FXML
    private Button btnSupprimer;
    @FXML
    private TextField txtRecherche;
    @FXML
    private Button btnRecherche;
    @FXML
    private ImageView logoImageView;



    private ObservableList<RendezVous> rendezVousList = FXCollections.observableArrayList();
    private RendezVousService rendezVousService = new RendezVousService();
    
    

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // Initialiser les colonnes de la table avec les propriétés des objets RendezVous
        colId.setCellValueFactory(new PropertyValueFactory<>("id"));
        colDateRdv.setCellValueFactory(new PropertyValueFactory<>("date_rdv"));
        colEtat.setCellValueFactory(new PropertyValueFactory<>("etat"));
        colMessage.setCellValueFactory(new PropertyValueFactory<>("message"));
        colTypeLieu.setCellValueFactory(new PropertyValueFactory<>("type_lieu"));

        // Charger les données de la base de données dans la table
        loadRendezVousData();
        
        // Charger l'image à partir du fichier
        //Image logoImage = new Image(getClass().getResourceAsStream("logo.png"));

        // Afficher l'image dans l'ImageView
        //logoImageView.setImage(logoImage);
    }
    
    
    @FXML
    private void handleBtnRecherche(ActionEvent event) {
    // Récupérer le texte de recherche de la zone de texte
    String recherche = txtRecherche.getText().trim().toLowerCase();
    // Filtrer la liste des rendez-vous pour inclure uniquement les rendez-vous qui correspondent à la recherche
    ObservableList<RendezVous> rendezVousFiltres = rendezVousList.filtered(rv -> {
        // Comparer chaque propriété du rendez-vous avec le texte de recherche
        return String.valueOf(rv.getId()).toLowerCase().contains(recherche)
                || rv.getDate_rdv().toString().toLowerCase().contains(recherche)
                || rv.getEtat().toLowerCase().contains(recherche)
                || rv.getMessage().toLowerCase().contains(recherche)
                || rv.getType_lieu().toLowerCase().contains(recherche);
    });

    // Actualiser la table avec la liste filtrée de rendez-vous
    tableRendezVous.setItems(rendezVousFiltres);
    }

    
    
    


    @FXML
    private void handleBtnModifier(ActionEvent event) {
        // Récupérer le rendez-vous sélectionné dans la table
        RendezVous selectedRendezVous = tableRendezVous.getSelectionModel().getSelectedItem();
        if (selectedRendezVous != null) {
            // Ouvrir la fenêtre de modification du rendez-vous avec les données du rendez-vous sélectionné
            FXMLLoader loader = new FXMLLoader(getClass().getResource("FXML_ModifierRendezVous.fxml"));
            try {
                Parent root = loader.load();
                FXML_ModifierRendezVousController controller = loader.getController();
                controller.setRendezVous(selectedRendezVous);
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.showAndWait();
            } catch (IOException e) {
                e.printStackTrace();
            }

            // Appeler la méthode de mise à jour du rendez-vous dans la base de données avec les nouvelles données
            // (La mise à jour des données se fait dans la méthode handleBtnValider() de FXML_ModifierRendezVousController)

            // Actualiser la table avec les nouvelles données
            loadRendezVousData();
        }
    }


    @FXML
    private void handleBtnSupprimer(ActionEvent event) {
        // Récupérer le rendez-vous sélectionné dans la table
        RendezVous selectedRendezVous = tableRendezVous.getSelectionModel().getSelectedItem();
        if (selectedRendezVous != null) {
            // Appeler la méthode de suppression du rendez-vous dans la base de données
            rendezVousService.supprimerRendezVous(selectedRendezVous.getId());
            // Actualiser la table en supprimant le rendez-vous sélectionné
            tableRendezVous.getItems().remove(selectedRendezVous);
        }
    }

    private void loadRendezVousData() {
        // Charger les données de la base de données dans la liste observable
        List<RendezVous> rendezVousData = rendezVousService.getAllRendezVous();
        rendezVousList.clear();
        rendezVousList.addAll(rendezVousData);
        // Actualiser la table avec les données chargées
        tableRendezVous.setItems(rendezVousList);
    }
    
   /** private void handleBtnTriDate(ActionEvent event) {
        // Trier la liste observable de rendez-vous par date de rendez-vous
        rendezVousList.sort((rv1, rv2) -> rv1.getDate_rdv().compareTo(rv2.getDate_rdv()));
        // Actualiser la table avec la liste triée de rendez-vous
        tableRendezVous.setItems(rendezVousList);
    }**/

}
