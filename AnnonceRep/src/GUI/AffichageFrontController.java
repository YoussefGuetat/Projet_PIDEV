/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;
import Entities.Annonce;
import Entities.Annonce.Bmc;
import Service.AnnonceService;
import Service.BmcService;
import Utils.MyDB;
import com.gluonhq.charm.glisten.control.TextField;
import java.awt.event.MouseEvent;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Comparator;
import java.util.List;
import java.util.ResourceBundle;
import java.util.function.Predicate;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.ReadOnlyObjectWrapper;
import javafx.beans.property.SimpleObjectProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
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
import javafx.stage.Stage;
import org.json.JSONException;
import org.json.JSONObject;


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
    
     @FXML
    private TableColumn<Annonce, Void> bmccolumn;
    
    
    
    
     
    
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
    private Label temperatureLabel;

    @FXML
    private Label descriptionLabel;

    
   

    

    
    
    
    
   private static final String API_KEY = "9c0faa59f5571eb0ffbf9f27eafb9b9a"; 
   private static final String API_URL = "https://api.openweathermap.org/data/2.5/weather?q=%s&appid=%s";

@Override
public void initialize(URL location, ResourceBundle resources) {

    String city = "Tunisia";
    try {
        URL url = new URL(String.format(API_URL, city, API_KEY));
        HttpURLConnection conn = (HttpURLConnection) url.openConnection();
        conn.setRequestMethod("GET");
        BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
        String inputLine;
        StringBuffer response = new StringBuffer();
        while ((inputLine = in.readLine()) != null) {
            response.append(inputLine);
        }
        in.close();
        JSONObject json = new JSONObject(response.toString());
        double temperature = json.getJSONObject("main").getDouble("temp");
        String description = json.getJSONArray("weather").getJSONObject(0).getString("description");
        temperatureLabel.setText(String.format("%.2f°C", temperature - 273.15));
        descriptionLabel.setText(description);
    } catch (IOException | JSONException e) {
        System.out.println("An error occurred while retrieving weather data: " + e.getMessage());
    }
        
        
        
        
        
        
        
        
        
        searchfield.textProperty().addListener((observable, oldValue, newValue) -> {
        // Get the search text from the TextField
        String searchText = searchfield.getText().trim();

        // Clear any existing selection
        annoncesTable.getSelectionModel().clearSelection();

        // Create a filtered list of announcements based on the search criteria
        FilteredList<Annonce> filteredList = new FilteredList<>(annoncesTable.getItems(), annonce -> 
                annonce.getTitre().toLowerCase().contains(searchText.toLowerCase())
                || annonce.getDomaine().toLowerCase().contains(searchText.toLowerCase()));

        // Sort the filtered list by titre in ascending order
        filteredList.sorted(Comparator.comparing(Annonce::getTitre));

        // Set the filtered list as the items of the TableView
        annoncesTable.setItems(filteredList);

        // Check if the filtered list has any matches
        if (filteredList.size() > 0) {
            // Select the first matching annonce
            annoncesTable.getSelectionModel().select(0);
            // Scroll to the first matching annonce
            annoncesTable.scrollTo(0);
        } else {
            // If no matches found, display an alert or handle as needed
            // For example, you can show a pop-up message using JavaFX Dialog
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("No Matching Announcements");
            alert.setHeaderText(null);
            alert.setContentText("No announcements found with the given search text.");
            alert.showAndWait();
        }
    });
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         bmccolumn.setCellFactory(param -> new TableCell<Annonce, Void>() {
    private final Button bmcButton = new Button("BMC");

    {
       bmcButton.setOnAction(event -> {
    Annonce annonce = getTableView().getItems().get(getIndex());
    try {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/GUI/DisplayBmc.fxml"));
        Parent root = (Parent) loader.load();
        DisplayBmcController controller = loader.getController();
        BmcService bmcService = new BmcService();
        Bmc bmc = bmcService.getBmcByAnnonceId(annonce.getId());
        if (bmc == null) {
            // Handle the case where no BMC was found for this annonce
            Alert alert = new Alert(Alert.AlertType.ERROR, "No BMC found for this annonce.");
            alert.showAndWait();
        } else {
            controller.setBmc(bmc);
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        }
    } catch (IOException | SQLException e) {
        // Handle the exception
        e.printStackTrace(); // add this line to print the exception
    }
});

    }

    @Override
    public void updateItem(Void item, boolean empty) {
        super.updateItem(item, empty);
        if (empty) {
            setGraphic(null);
        } else {
            setGraphic(bmcButton);
        }
    }
});







        
         annoncesTable.setRowFactory( e -> {
     TableRow<Annonce> myRow = new TableRow<>();
     myRow.setOnMouseClicked (event ->
     {
        if (event.getClickCount() == 1 && (!myRow.isEmpty()))
        {
            myIndex =  annoncesTable.getSelectionModel().getSelectedIndex();
           updateidfield.setText(String.valueOf(annoncesTable.getItems().get(myIndex).getId()));

           updatetitrefield.setText(annoncesTable.getItems().get(myIndex).getTitre());
           updatedomainefield.setText(annoncesTable.getItems().get(myIndex).getDomaine());
           updatedescriptionfield.setText(annoncesTable.getItems().get(myIndex).getDescription());
           updatestatutfield.setText(annoncesTable.getItems().get(myIndex).getStatut());
          
                         
                        
        }                
        
     });
        return myRow;});
        
        
        
        
        
        
        MyDB myDB = MyDB.getInstance();
    Connection conx = myDB.getConx();
    AnnonceService annonceService = new AnnonceService();
    idtable.setCellValueFactory(new PropertyValueFactory<>("id"));
    titretable.setCellValueFactory(new PropertyValueFactory<>("titre"));
    domainetable.setCellValueFactory(new PropertyValueFactory<>("domaine"));
    descriptiontable.setCellValueFactory(new PropertyValueFactory<>("description"));
    datetable.setCellValueFactory(new PropertyValueFactory<>("date_Crea"));
    statuttable.setCellValueFactory(new PropertyValueFactory<>("statut"));

     imagetable.setCellValueFactory(param -> {
        // Return cell value as StringProperty to bind to cell text
        return new SimpleStringProperty(param.getValue().getImage());
    });
  
     
     
     
 
    imagetable.setCellFactory(param -> new TableCell<Annonce, String>() {
        private final ImageView imageView = new ImageView(); // Create ImageView for displaying image

        {
            // Set preferred width and height for ImageView
            imageView.setFitWidth(50);
            imageView.setFitHeight(50);
        }

        @Override
        protected void updateItem(String item, boolean empty) {
            super.updateItem(item, empty);
            if (empty || item == null) {
                setGraphic(null); // If item is null or cell is empty, clear graphic
            } else {
                // Set image URL to ImageView
                imageView.setImage(new Image(item));
                setGraphic(imageView); // Set ImageView as graphic for the cell
            }
        }
    });
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

     imagetable.setCellValueFactory(param -> {
        // Return cell value as StringProperty to bind to cell text
        return new SimpleStringProperty(param.getValue().getImage());
    });

    // Set custom cell factory for image table
    imagetable.setCellFactory(param -> new TableCell<Annonce, String>() {
        private final ImageView imageView = new ImageView(); // Create ImageView for displaying image

        {
            // Set preferred width and height for ImageView
            imageView.setFitWidth(50);
            imageView.setFitHeight(50);
        }

        @Override
        protected void updateItem(String item, boolean empty) {
            super.updateItem(item, empty);
            if (empty || item == null) {
                setGraphic(null); // If item is null or cell is empty, clear graphic
            } else {
                // Set image URL to ImageView
                imageView.setImage(new Image(item));
                setGraphic(imageView); // Set ImageView as graphic for the cell
            }
        }
    });
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


  @FXML
public void trierAnnoncesParTitreAsc() {
    // Set a custom comparator to sort annonces by titre in ascending order
    

    // Sort the table data using the comparator
    annoncesTable.getItems().sort((annonce1, annonce2) -> {
        return annonce1.getTitre().compareTo(annonce2.getTitre());
    });
}


 @FXML
public void trierAnnoncesParDate() {
    // Set a custom comparator to sort annonces by titre in ascending order
    

    // Sort the table data using the comparator
    annoncesTable.getItems().sort((annonce1, annonce2) -> {
        return annonce1.getDate_Crea().compareTo(annonce2.getDate_Crea());
    });
}

@FXML
private TextField searchfield;


@FXML
public void searchAnnonceByTitre() {
    
}





@FXML
private Button stats;
@FXML
void stats(ActionEvent event) {
    try {
        // Load stats.fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Stats.fxml"));
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


private Scene previousScene;
@FXML
void goBack(ActionEvent event) {
    // Get the current window
    Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();

    // Set the previous scene back in the current window
    stage.setScene(previousScene);
}


}
