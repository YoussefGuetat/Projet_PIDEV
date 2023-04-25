/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Annonce;
import Service.AnnonceService;
import java.net.URL;
import java.util.ResourceBundle;
import java.sql.Date;
import javafx.fxml.Initializable;
import com.gluonhq.charm.glisten.control.ProgressBar; 
import com.gluonhq.charm.glisten.control.ProgressIndicator;
import com.gluonhq.charm.glisten.control.TextField; 
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;

import java.sql.SQLException;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import javafx.stage.FileChooser.ExtensionFilter;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author hgygz
 */
public class AnnonceController implements Initializable {
    
    


   
    @FXML
    private TextField datefield;

    

    

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    @FXML
    private Button btnpublier;

    @FXML
    private TextField titrefield;

    @FXML
    private TextField descriptionfield;

    @FXML
    private TextField domainefield;

    @FXML
    private TextField statutfield;
    
   @FXML
 

void AddAnnonce(ActionEvent event) {
    String titre = titrefield.getText();
    String description = descriptionfield.getText();
    String domaine = domainefield.getText();
    String image = Image; // Retrieve the value from the image input field
    String statut = statutfield.getText();
    java.util.Date date_Crea = new java.util.Date();

    // Perform input validation
    if (titre.isEmpty() || description.isEmpty() || domaine.isEmpty() || image.isEmpty() || statut.isEmpty() ) {
        // Display an error message or perform appropriate error handling
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText("Please fill in all fields.");
        alert.showAndWait();
        return; // Return early if any field is empty
    }

    // Convert java.util.Date to java.sql.Date
    Date sqlDate_Crea = new Date(date_Crea.getTime());

    // Create Annonce object with input values
    Annonce a = new Annonce(titre, description, sqlDate_Crea, image, domaine, statut);

    // Perform further processing
    AnnonceService newannonce = new AnnonceService();
    newannonce.ajouter(a);
      Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Annonce publiée");
        alert.setHeaderText("Published");
        alert.setContentText("The announce has been published successfully.");
        alert.showAndWait();
}

  @FXML
    public Button btnliste;
  @FXML
void ListeAnnonces(ActionEvent event){
     try {
        // Load stats.fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("AffichageFront.fxml"));
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

 @FXML
    private Button ajoutbmc;

 @FXML
void ajoutbmc(ActionEvent event){
     try {
        // Load stats.fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Bmc.fxml"));
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

private int id; // Change the data type of 'id' to match the data type of the ID in your Annonce object

// Set the ID of the Annonce object to be updated
public void setId(int id) {
    this.id = id;}

@FXML
private Button btnModifier;

  @FXML
    private TextField writeid;





 @FXML
    private ImageView ImagePreview;

    @FXML
    private Button onBtnImageClicked;
private String Image;
    @FXML 
    private Label labelImage;
    
    @FXML
private TextField imageField;
    
    
 @FXML
private void onBtnImageClicked(ActionEvent event) {
    FileChooser fileChooser = new FileChooser();
    FileChooser.ExtensionFilter extFilter = new FileChooser.ExtensionFilter("Image files (*.jpg, *.png)", "*.jpg", "*.png");
    fileChooser.getExtensionFilters().add(extFilter);
    File file = fileChooser.showOpenDialog(null); // Show file chooser dialog

    if (file != null) {
        try {
            // Load image from selected file
            FileInputStream fileInputStream = new FileInputStream(file);
            Image image = new Image(fileInputStream);
            ImagePreview.setImage(image);

            Image = file.toURI().toString(); // Update the Image variable with the file path
            labelImage.setText(file.getName()); // Update the label with the file name
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}

@FXML
private void onBtnUploadClicked(ActionEvent event) {
    // Call uploadImage method with Image
    uploadImage(Image);
}

private void uploadImage(String Image) {
    // Implement your image upload logic here
    // You can use the Image variable to get the file path of the selected image
    // and then upload it to your desired server or API using appropriate methods or libraries
    // For example, you can use Java's standard IO classes or third-party libraries like Apache HttpClient
    // to send the image file to a remote server using HTTP POST or any other required method.
    // You may also need to handle authentication, error checking, response handling, etc. depending on your requirements.
}
   
    
    
    
  
}