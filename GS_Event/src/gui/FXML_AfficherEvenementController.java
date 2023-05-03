package gui;

import dao.EvenementDao;
import entites.Evenement;
import java.io.File;
import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleListProperty;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import javafx.util.Callback;

public class FXML_AfficherEvenementController implements Initializable {

    @FXML
    private TableView<Evenement> tableView;

    @FXML
    private TableColumn<Evenement, Integer> idColumn;

    @FXML
    private TableColumn<Evenement, String> nomColumn;

    @FXML
    private TableColumn<Evenement, String> adresseColumn;

    @FXML
    private TableColumn<Evenement, Integer> nbrplacesColumn;

    @FXML
    private TableColumn<Evenement, String> objetColumn;

    @FXML
    private TableColumn<Evenement, String> descriptionColumn;

    @FXML
    private TableColumn<Evenement, String> photoColumn;

    @FXML
    private TableColumn<Evenement, String> dateeventColumn;
   
    @FXML
    private Button btnTrier;
    @FXML
    private TextField searchField;
    @FXML
    private Button ajouter;
 
    
    private final SimpleListProperty<Evenement> evenementsProperty = new SimpleListProperty<>();

    @Override
    public void initialize(URL url, ResourceBundle rb) {
      //  idColumn.setCellValueFactory(new PropertyValueFactory<>("id"));
        nomColumn.setCellValueFactory(new PropertyValueFactory<>("nom"));
        adresseColumn.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        nbrplacesColumn.setCellValueFactory(new PropertyValueFactory<>("nbrplaces"));
        objetColumn.setCellValueFactory(new PropertyValueFactory<>("objet"));
        descriptionColumn.setCellValueFactory(new PropertyValueFactory<>("description"));
        dateeventColumn.setCellValueFactory(new PropertyValueFactory<>("dateevent"));
        

        photoColumn.setCellValueFactory(new PropertyValueFactory<>("photo"));
        photoColumn.setCellFactory(getImageCellFactory());

        EvenementDao evenementDao = new EvenementDao();
        List<Evenement> evenements = evenementDao.getAllEvenements();
            nbrplacesColumn.setCellFactory(column -> {
        return new TableCell<Evenement, Integer>() {
            @Override
            protected void updateItem(Integer item, boolean empty) {
                super.updateItem(item, empty);

                if (item == null || empty) {
                    setText(null);
                    setStyle("");
                } else {
                    setText(String.valueOf(item));
                    if (item < 10) {
                        setStyle("-fx-background-color: #FF3333;");
                    } else if (item < 21) {
                        setStyle("-fx-background-color: #FFA500;");
                    } else {
                        setStyle("-fx-background-color: #90EE90;");
                    }
                }
            }
        };
    });
            
        setEvenements(evenements);
        tableView.itemsProperty().bind(evenementsProperty);
    
     ajouter.setOnAction((ActionEvent event) -> {
            GoToAjout();
    });    

    }
    
    private void setEvenements(List<Evenement> evenements) {
        ObservableList<Evenement> observableList = FXCollections.observableArrayList();
        observableList.addAll(evenements);
        evenementsProperty.set(observableList);
    }
    
    private Callback<TableColumn<Evenement, String>, TableCell<Evenement, String>> getImageCellFactory() {
        return (TableColumn<Evenement, String> param) -> {
            final ImageView imageView = new ImageView();
            imageView.setFitHeight(100);
            imageView.setFitWidth(100);
            TableCell<Evenement, String> cell = new TableCell<Evenement, String>() {
                @Override
                protected void updateItem(String item, boolean empty) {
                    if (item != null && !empty) {
                        File file = new File(item);
                        try {
                            Image image = new Image(file.toURI().toURL().toExternalForm(), 100, 100, true, true);
                            imageView.setImage(image);
                            setGraphic(imageView);
                        } catch (MalformedURLException ex) {
                            ex.printStackTrace();
                        }
                    } else {
                        setGraphic(null);
                    }
                }
            };
            return cell;
        };
    }
   
@FXML
private void handleSupprimerButtonAction(ActionEvent event) {
    // Récupérer l'objet sélectionné
    Evenement evenementSelectionne = tableView.getSelectionModel().getSelectedItem();
    if (evenementSelectionne == null) {
        // Afficher un message d'erreur si aucun événement n'est sélectionné
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner un événement à supprimer");
        alert.showAndWait();
        return;
    }
    
    // Demander confirmation avant de supprimer l'événement
    Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
    alert.setTitle("Confirmation");
    alert.setHeaderText(null);
    alert.setContentText("Êtes-vous sûr de vouloir supprimer l'événement ?");
    Optional<ButtonType> result = alert.showAndWait();
    if (result.get() == ButtonType.OK){
        // Supprimer l'événement
        int idEvenement = evenementSelectionne.getId();
        supprimerEvenement(idEvenement);
        // Actualiser la table des événements
        List<Evenement> evenements = evenementsProperty.get();
        evenements.remove(evenementSelectionne);
        setEvenements(evenements);
    } else {
        // Ne rien faire si l'utilisateur annule la suppression
        return;
    }
}

private void supprimerEvenement(int idEvenement) {
    try {
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
        // Supprimer tous les tickets associés à l'événement
        PreparedStatement stmt1 = conn.prepareStatement("DELETE FROM ticket WHERE evenements_id = ?");
        stmt1.setInt(1, idEvenement);
        stmt1.executeUpdate();
        // Supprimer l'événement lui-même
        PreparedStatement stmt2 = conn.prepareStatement("DELETE FROM evenement WHERE id = ?");
        stmt2.setInt(1, idEvenement);
        stmt2.executeUpdate();
        conn.close();
    } catch (SQLException ex) {
        ex.printStackTrace();
    }
}
@FXML
private void handleModifierButtonAction(ActionEvent event) {
    Evenement evenementSelectionne = tableView.getSelectionModel().getSelectedItem();
    if (evenementSelectionne == null) {
        // Afficher un message d'erreur si aucun événement n'est sélectionné
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner un événement à modifier");
        alert.showAndWait();
        return;
    }
    try {
    // Ouvrir la fenêtre de modification de l'événement
    FXMLLoader loader = new FXMLLoader(getClass().getResource("/gui/ModifierEvent.fxml"));
    Parent root = loader.load();
    FXML_ModifierEvenementController controller = loader.getController();
    
    // Passer l'événement sélectionné à la fenêtre de modification
    controller.setEvenement(evenementSelectionne);
    
    // Afficher la fenêtre de modification
    Stage stage = new Stage();
    Scene scene = new Scene(root);
    stage.setScene(scene);
    stage.showAndWait();
    
    // Mettre à jour l'événement dans la base de données
    EvenementDao evenementDao = new EvenementDao();
    evenementDao.updateEvenement(evenementSelectionne);
    
    // Actualiser la tableview avec les nouvelles informations
    actualiserTableview();
    
} catch (IOException ex) {
    ex.printStackTrace();
}

}
private void actualiserTableview() {
    EvenementDao evenementDao = new EvenementDao();
    List<Evenement> evenements = evenementDao.getAllEvenements();
    setEvenements(evenements);
}

@FXML
private void handleSearchAction(ActionEvent event) {
    String searchText = searchField.getText();
    EvenementDao evenementDao = new EvenementDao();
    List<Evenement> evenements = evenementDao.searchEvenements(searchText);
    setEvenements(evenements);
}
@FXML
private void handleTrierButtonAction(ActionEvent event) {
    // Récupérer les événements
    
    List<Evenement> evenements = evenementsProperty.get();
    
    // Trier les événements sur la colonne nbrplaces
    evenements.sort((e1, e2) -> Integer.compare(e1.getNbrplaces(), e2.getNbrplaces()));
    
    // Trier les événements sur la colonne Date
    evenements.sort((e1, e2) -> e1.getDateevent().compareTo(e2.getDateevent()));
    
    // Actualiser la table des événements
    setEvenements(evenements);
}
private String getColor(int nbrplaces) {
    if (nbrplaces < 10) {
        return "red";
    } else if (nbrplaces >= 10 && nbrplaces <= 20) {
        return "yellow";
    } else {
        return "green";
    }
}

private void GoToAjout(){
            Parent root;
            try {
            root = FXMLLoader.load(getClass().getResource("AjouterEvent.fxml"));
            Scene c=new Scene(root);
             Stage stage=(Stage)ajouter.getScene().getWindow();
            stage.setScene(c);
        } catch (IOException ex) {
            Logger.getLogger(FXML_AfficherEvenementController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }


}
