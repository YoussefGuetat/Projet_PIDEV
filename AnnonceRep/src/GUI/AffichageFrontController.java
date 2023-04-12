/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;
import Entities.Annonce;
import Service.AnnonceService;
import Utils.MyDB;
import com.gluonhq.charm.glisten.control.TextField;
import java.awt.event.MouseEvent;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.ReadOnlyObjectWrapper;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableRow;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.image.Image;
import javafx.scene.layout.HBox;
import javafx.stage.FileChooser;


/**
 * FXML Controller class
 *
 * @author hgygz
 */
public class AffichageFrontController implements Initializable {
    private String ImagePath;
        @FXML
    private Button refresh;

    @FXML
    private TableView<Annonce> annoncesTable;
    
       @FXML
    private TableColumn<Annonce, Integer> idtable;

    @FXML
    private TableColumn<Annonce, String> titretable;

    @FXML
    private TableColumn<Annonce, String> domainetable;

    @FXML
    private TableColumn<Annonce, String> descriptiontable;

    @FXML
    private TableColumn<Annonce, String> statuttable;

   @FXML
    private TableColumn<Annonce, String> datetable;

    @FXML
    private TableColumn<Annonce, String> imagetable;
    
    
    
    ObservableList<Annonce>  AnnonceList = FXCollections.observableArrayList();
     
    String query = null;
    Connection connection = null ;
    PreparedStatement preparedStatement = null ;
    ResultSet resultSet = null ;
    Annonce annonce = null ;
    
     @FXML
    private Button btnpublier;

    @FXML
    private TextField updatetitrefield;

    @FXML
    private TextField updatedescriptionfield;

    @FXML
    private TextField updatedomainefield;
    
      @FXML
    private TextField updateidfield;

    @FXML
    private TextField updatestatutfield;
    
   @FXML
    
    
    
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
    
    }   
    
    
    
    
    
@FXML
private TableColumn<Annonce, String> deleteButtonColumn;

@FXML
private void refreshTable() {
    MyDB myDB = MyDB.getInstance();
    Connection conx = myDB.getConx();
    AnnonceService annonceService = new AnnonceService();
    idtable.setCellValueFactory(new PropertyValueFactory<>("id"));
    titretable.setCellValueFactory(new PropertyValueFactory<>("titre"));
    domainetable.setCellValueFactory(new PropertyValueFactory<>("domaine"));
    descriptiontable.setCellValueFactory(new PropertyValueFactory<>("description"));
    datetable.setCellValueFactory(new PropertyValueFactory<>("date_Crea"));
    statuttable.setCellValueFactory(new PropertyValueFactory<>("statut"));

    imagetable.setCellValueFactory(new PropertyValueFactory<>("image")); // Set cell value factory for image table

    // Set cell value factory for button column
     deleteButtonColumn.setCellValueFactory(param -> new SimpleStringProperty("Delete"));
    deleteButtonColumn.setCellFactory(param -> new TableCell<Annonce, String>() {
        private final Button deleteButton = new Button("Delete");

        {
            deleteButton.setOnAction(event -> {
                Annonce annonce = getTableView().getItems().get(getIndex());
                deleteAnnonce(annonce); // Pass the conx connection object
            });
        }

        @Override
        protected void updateItem(String item, boolean empty) {
            super.updateItem(item, empty);
            if (empty) {
                setGraphic(null);
            } else {
                setGraphic(deleteButton);
            }
        }
    });

    try {
        List<Annonce> annonces = annonceService.afficherListe();
        ObservableList<Annonce> annoncesData = FXCollections.observableArrayList(annonces);
        annoncesTable.setItems(annoncesData);
    } catch (SQLException e) {
        e.printStackTrace();
    }
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
int id;
@FXML
private void deleteAnnonce(Annonce annonce) {
    MyDB myDB = MyDB.getInstance();
    Connection conx = myDB.getConx();

    try {
        if (conx != null && !conx.isClosed()) {
            AnnonceService annonceService = new AnnonceService();
            annonceService.supprimer(annonce.getId(), conx);
        } else {
            System.err.println("Connection is closed or not properly initialized.");
        }
    } catch (SQLException ex) {
        ex.printStackTrace();
    } finally {
        myDB.closeConx(); // Close the Connection object
    }
}












 @FXML
    private Button btnupdate;
int myIndex;

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
   



@FXML
private void handleUpdateButtonAction(ActionEvent event) {
    // Get the values from the TextField fields
    String titre = updatetitrefield.getText();
    String description = updatedescriptionfield.getText();
    String domaine = updatedomainefield.getText();
    String statut = updatestatutfield.getText();
    int id = Integer.parseInt(updateidfield.getText()); // assuming updateidfield contains integer input

    // Create an Annonce object with the updated values
    Annonce updatedAnnonce = new Annonce();
    updatedAnnonce.setTitre(titre);
    updatedAnnonce.setDescription(description);
    updatedAnnonce.setDomaine(domaine);
    updatedAnnonce.setStatut(statut);
    updatedAnnonce.setId(id);

    // Call the uploadImage method to upload the new image and get the updated image path
    String image = Image;
    updatedAnnonce.setImage(image);

    // Call the modifier method in your AnnonceService to update the Annonce in the database
    AnnonceService annonceService = new AnnonceService(); // replace with your actual AnnonceService instance
    annonceService.modifier(updatedAnnonce, id);

    // Print a success message
    System.out.println("Annonce modifiée !");
}


}
