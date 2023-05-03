package gui;

import dao.EvenementDao;
import entites.Evenement;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.StandardCopyOption;
import java.sql.Date;
import java.time.LocalDate;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import javafx.stage.Stage;

public class FXML_ModifierEvenementController implements Initializable {
    
    @FXML
    private TextField nomTextField;
    
    @FXML
    private TextField adresseTextField;
    
    @FXML
    private TextField photoTextField;
    
    @FXML
    private TextField nbrPlacesTextField;
    
    @FXML
    private TextField objetTextField;
    
   // @FXML
    //private TextArea descriptionTextArea;
    @FXML
    private TextField descriptionTextArea;
    
    @FXML
    private DatePicker dateEventDatePicker;
    
    @FXML
    private Button enregistrerButton;
    
    @FXML
    private Button annulerButton;
    
    private Evenement evenement;
    
    private EvenementDao evenementDao;
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        evenementDao = new EvenementDao();
    }
    
    public void setEvenement(Evenement evenement) {
        this.evenement = evenement;
        nomTextField.setText(evenement.getNom());
        adresseTextField.setText(evenement.getAdresse());
        photoTextField.setText(evenement.getPhoto());
        nbrPlacesTextField.setText(Integer.toString(evenement.getNbrplaces()));
        objetTextField.setText(evenement.getObjet());
        descriptionTextArea.setText(evenement.getDescription());
        dateEventDatePicker.setValue(evenement.getDateevent().toLocalDate());
    }
    private FileChooser fileChooser;

@FXML
private ImageView imageView;

private String photoPath;

@FXML
private void handlePhotoChooserButton() {
    // Création du file chooser
    fileChooser = new FileChooser();
    fileChooser.setTitle("Choisir une photo");

    // Ajout des filtres pour les images
    FileChooser.ExtensionFilter extFilterJPG = new FileChooser.ExtensionFilter("Fichiers JPG (*.jpg)", "*.JPG", "*.jpg");
    FileChooser.ExtensionFilter extFilterPNG = new FileChooser.ExtensionFilter("Fichiers PNG (*.png)", "*.PNG", "*.png");
    fileChooser.getExtensionFilters().addAll(extFilterJPG, extFilterPNG);

    // Ouverture du file chooser
    File selectedFile = fileChooser.showOpenDialog(null);

    if (selectedFile != null) {
        try {
            // Chargement de l'image
            Image image = new Image(selectedFile.toURI().toString());
            imageView.setImage(image);

            // Enregistrement de la photo dans le dossier "Images"
            String oldPath = photoPath;
            photoPath = "C:\\Users\\ASUS\\Documents\\NetBeansProjects\\GS_Event\\images\\" + evenement.getNom();
            photoTextField.setText(photoPath);

            Files.copy(selectedFile.toPath(), new File(photoPath).toPath(), StandardCopyOption.REPLACE_EXISTING);

            // Suppression de l'ancienne photo
            if (oldPath != null) {
                File oldFile = new File(oldPath);
                if (oldFile.exists()) {
                    oldFile.delete();
                    
                }
            }
        } catch (IOException ex) {
            showWarningDialog("Erreur lors du chargement de l'image.");
        }
    }
}

    @FXML
    private void handleEnregistrerButton() {
        // Vérification du champ nomTextField
        if (nomTextField.getText().isEmpty()) {
        showWarningDialog("Veuillez saisir un nom pour l'événement.");
        return;
        }
         // Vérification du champ adresseTextField
         if (adresseTextField.getText().isEmpty()) {
        showWarningDialog("Veuillez saisir une adresse pour l'événement.");
          return;
         } 

        

           // Vérification du champ nbrPlacesTextField
       if (nbrPlacesTextField.getText().isEmpty()) {
       showWarningDialog("Veuillez saisir un nombre de places pour l'événement.");
       return;
         }
        try {
        int nbrPlaces = Integer.parseInt(nbrPlacesTextField.getText());
        if (nbrPlaces < 1) {
        showWarningDialog("Veuillez saisir un nombre de places valide pour l'événement.");
        return;
         }
          }catch (NumberFormatException e) {
         showWarningDialog("Veuillez saisir un nombre de places valide pour l'événement.");
         return;
         }

         // Vérification du champ objetTextField
         if (objetTextField.getText().isEmpty()) {
         showWarningDialog("Veuillez saisir un objet pour l'événement.");
        return;
         }

       // Vérification du champ descriptionTextArea
       if (descriptionTextArea.getText().isEmpty()) {
        showWarningDialog("Veuillez saisir une description pour l'événement.");
        return;
         }

        // Vérification du champ dateEventDatePicker
        if (dateEventDatePicker.getValue() == null || dateEventDatePicker.getValue().isBefore(LocalDate.now())) {
        showWarningDialog("Veuillez saisir une date valide pour l'événement.");
         return;
        }
        evenement.setNom(nomTextField.getText());
        evenement.setAdresse(adresseTextField.getText());
        evenement.setPhoto(photoTextField.getText());
        evenement.setNbrplaces(Integer.parseInt(nbrPlacesTextField.getText()));
        evenement.setObjet(objetTextField.getText());
        evenement.setDescription(descriptionTextArea.getText());
        evenement.setDateevent(Date.valueOf(dateEventDatePicker.getValue()));
        evenementDao.updateEvenement(evenement);
        showInformationDialog("Événement modifié avec succès.");
        closeStage();
    }
    
    @FXML
    private void handleAnnulerButton() {
        closeStage();
    } 
    
    private void closeStage() {
        ((Stage) nomTextField.getScene().getWindow()).close();
    }
    
    private void showInformationDialog(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private void showWarningDialog(String message) {
    Alert alert = new Alert(Alert.AlertType.WARNING);
    alert.setTitle("Avertissement");
    alert.setHeaderText(null);
    alert.setContentText(message);
    alert.showAndWait();
}

}
