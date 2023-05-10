package gui;

import entites.Contrat;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.Files;
import java.sql.Date;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import services.ContratService;

public class FXML_AjouterContratController implements Initializable {

    @FXML
    private DatePicker date_contart_field;

    @FXML
    private TextField duree_contrat_field;

    @FXML
    private TextField taux_profit_field;

    @FXML
    private Button ajouter_contrat_button;

    @FXML
    private Button choisir_image_button;

    @FXML
    private Label image_label;

    private String image_path = null;

    private ContratService contratService = new ContratService();
    
    private Stage stage;
     @FXML
    private Button retour;

    public void setStage(Stage stage) {
        this.stage = stage;
    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        
        
         retour.setOnAction((ActionEvent event) -> {
                redirectToList();
            });
         
    }

    @FXML
    void ajouterContrat() {
        
        // Récupération des données du formulaire
    if (date_contart_field.getValue() == null) {
        // Vérification si une date est sélectionnée
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner une date valide.");
        alert.showAndWait();
        return;
    }
    
    if (date_contart_field.getValue() == null || duree_contrat_field.getText().isEmpty() || taux_profit_field.getText().isEmpty() ) {
        // Vérification si tous les champs sont remplis
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez remplir tous les champs obligatoires.");
        alert.showAndWait();
        return;
    }

        // get values from input fields
        Date date_contrat = Date.valueOf(date_contart_field.getValue());
        int duree_contrat = Integer.parseInt(duree_contrat_field.getText());
        float taux_profit = Float.parseFloat(taux_profit_field.getText());

        Contrat contrat = new Contrat(date_contrat.toString(), duree_contrat, image_path, taux_profit);

        if (contratService.ajouterContrat(contrat)) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Contrat ajouté");
            alert.setHeaderText(null);
            alert.setContentText("Le contrat a été ajouté avec succès.");
            alert.showAndWait();

            // load FXML_AfficherContrat.fxml
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("gui/AfficherContrat.fxml"));
                Parent root = loader.load();
                FXML_AfficherContratController controller = loader.getController();
                controller.setStage(stage);
                Scene scene = new Scene(root);
                stage.setScene(scene);
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        } else {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Erreur lors de l'ajout du contrat");
            alert.setHeaderText(null);
            alert.setContentText("Une erreur s'est produite lors de l'ajout du contrat.");
            alert.showAndWait();
        }

    }

    @FXML
    void choisirImage() {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Choisir une image");
        FileChooser.ExtensionFilter imageFilter = new FileChooser.ExtensionFilter("Image Files", "*.png", "*.jpg", "*.jpeg", "*.gif");
        fileChooser.getExtensionFilters().add(imageFilter);
        File selectedFile = fileChooser.showOpenDialog(null);
        if (selectedFile != null) {
            try {
                byte[] fileContent = Files.readAllBytes(selectedFile.toPath());
                image_path = selectedFile.getPath();
                image_label.setText(selectedFile.getName());
            } catch (IOException ex) {
                Alert alert = new Alert(Alert.AlertType.ERROR);
                alert.setTitle("Erreur lors du choix de l'image");
                alert.setHeaderText(null);
                alert.setContentText("Une erreur s'est produite lors de la lecture de l'image sélectionnée.");
                alert.showAndWait();
            }
        }
    }
    
    private void redirectToList(){
    Parent root;
    try {
        root = FXMLLoader.load(getClass().getResource("AfficherContrat.fxml"));
        Scene c = new Scene(root);
        Stage stage = (Stage)retour.getScene().getWindow();
        stage.setScene(c);
    } catch (IOException ex) {
        Logger.getLogger(FXML_AjouterContratController.class.getName()).log(Level.SEVERE, null, ex);
    }
}
  

}






