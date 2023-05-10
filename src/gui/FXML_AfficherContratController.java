package gui;

import com.sun.xml.internal.bind.v2.runtime.reflect.Lister.Pack;
import java.io.IOException;
import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;

import entites.Contrat;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.LineChart;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Modality;
import javafx.stage.Stage;
import services.ContratService;

public class FXML_AfficherContratController implements Initializable {

    @FXML
    private TableView<Contrat> tableContrats;

    private Stage stage;

    @FXML
    private TableColumn<Contrat, Integer> colId;

    @FXML
    private TableColumn<Contrat, String> colDateContrat;

    @FXML
    private TableColumn<Contrat, Integer> colDureeContrat;

    @FXML
    private TableColumn<Contrat, String> colImage;

    @FXML
    private TableColumn<Contrat, Float> colTauxProfit;

    private ContratService contratService;
    @FXML
    private LineChart<String, Number> stat;
    @FXML
    private Button ajouter;
    @FXML
    private Button modifier;
   

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            contratService = new ContratService();
            
            // Configurer les colonnes de la table
            colDateContrat.setCellValueFactory(new PropertyValueFactory<>("date_contrat"));
            colDureeContrat.setCellValueFactory(new PropertyValueFactory<>("duree_contrat"));
            colImage.setCellValueFactory(new PropertyValueFactory<>("image"));
            colTauxProfit.setCellValueFactory(new PropertyValueFactory<>("taux_profit"));
            
            // Charger les contrats dans la table
            List<Contrat> contrat = contratService.listerContrats();
            tableContrats.getItems().addAll(contrat);
            statistique();
        } catch (SQLException ex) {
            Logger.getLogger(FXML_AfficherContratController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
       ajouter.setOnAction((ActionEvent event) -> {
            GoToAjout();
    }); 
   
    }

    void setStage(Stage stage) {
        this.stage = stage;
    }

    @FXML
    private void handleModifierContrat(ActionEvent event) throws IOException, SQLException {
        // Récupérer le contrat sélectionné
        Contrat contrat = tableContrats.getSelectionModel().getSelectedItem();
        if (contrat == null) {
            // Afficher une alerte si aucun contrat n'a été sélectionné
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Aucun contrat sélectionné");
            alert.setHeaderText("Aucun contrat sélectionné");
            alert.setContentText("Veuillez sélectionner un contrat.");
            alert.showAndWait();
        } else {
            // Charger la vue ModifierContrat.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/gui/ModifierContrat.fxml"));
            Parent root = loader.load();

            // Récupérer le contrôleur de la vue ModifierContrat.fxml et passer le contrat sélectionné
            FXML_ModifierContratController controller = loader.getController();
            controller.setContrat(contrat);

            // Créer une nouvelle scène pour la vue ModifierContrat.fxml
            Scene scene = new Scene(root);

            // Configurer la fenêtre
            Stage stage = new Stage();
            stage.initModality(Modality.APPLICATION_MODAL);
            stage.setScene(scene);
            stage.showAndWait();

            // Mettre à jour la table des contrats après la modification
            tableContrats.getItems().clear();
            List<Contrat> contrats = contratService.listerContrats();
            tableContrats.getItems().addAll(contrats);
        }
    }

    @FXML
    private void handleSupprimerContrat(ActionEvent event) {
        Contrat contratSelectionne = tableContrats.getSelectionModel().getSelectedItem();
        if (contratSelectionne != null) {
            tableContrats.getItems().remove(contratSelectionne);
        }
    }
    
    public void statistique() throws SQLException {
        ContratService Sps = new ContratService();

        List<Contrat> packs = null;
        packs = Sps.listerContrats();

        // Créer les axes pour le graphique
        final NumberAxis yAxis = new NumberAxis();
        final CategoryAxis xAxis = new CategoryAxis();
        xAxis.setLabel("Contrat");
        yAxis.setLabel("Taux");

        // Créer la série de données à afficher
        XYChart.Series series = new XYChart.Series();
        series.setName("taux disponibles par contrat");
        for (Contrat pack : packs) {
            series.getData().add(new XYChart.Data<>(pack.getDate_contrat(), pack.getTaux_profit()));
        }

        // Créer le graphique et ajouter la série de données
        LineChart<String, Number> lineChart = new LineChart<>(xAxis, yAxis);
        lineChart.setTitle("Statistiques des taux");
        lineChart.getData().add(series);

        // Afficher le graphique dans votre scène
        stat.setCreateSymbols(false);
        stat.getData().add(series);
        int totalPlaces = 0;
        int minPlaces = Integer.MAX_VALUE;
        int maxPlaces = Integer.MIN_VALUE;
        for (Contrat pack : packs) {
            totalPlaces += pack.getTaux_profit();
            minPlaces = (int) Math.min(minPlaces, pack.getTaux_profit());
            maxPlaces = (int) Math.max(maxPlaces, pack.getTaux_profit());
        }
        double averagePlaces = totalPlaces / (double) packs.size();

        // Afficher les statistiques dans des labels
       /* total = new Label("Nombre total de places disponibles : " + totalPlaces);
        average = new Label("Moyenne de places disponibles : " + averagePlaces);
        min = new Label("Minimum de places disponibles : " + minPlaces);
        max = new Label("Maximum de places disponibles : " + maxPlaces);
     
        vbox.getChildren().add(total);
        vbox.getChildren().add(average);
        vbox.getChildren().add(min);
        vbox.getChildren().add(max);*/

    }
    
  private void GoToAjout(){
            Parent root;
            try {
            root = FXMLLoader.load(getClass().getResource("AjouterContrat.fxml"));
            Scene c=new Scene(root);
             Stage stage=(Stage)ajouter.getScene().getWindow();
            stage.setScene(c);
        } catch (IOException ex) {
            Logger.getLogger(FXML_AfficherContratController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
  

}
