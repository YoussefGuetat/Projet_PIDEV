package home;

import Entities.Utilisateur;
import Services.UtilisateurServices;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import pidev_desk.NewFXMain;

public class Controller implements Initializable {

    @FXML
    private VBox pnItems = null;
    @FXML
    private Button btnOverview;

    @FXML
    private Button btnOrders;


    @FXML
    private Button btnSignout;

    @FXML
    private Pane pnlCustomer;

    @FXML
    private Pane pnlOrders;

    @FXML
    private Pane pnlOverview;

    @FXML
    private Pane pnlMenus;
        
        @FXML
    private Label username;
            @FXML
    private Label titre_dash;
                        @FXML
    private ImageView adminIMG;
                  @FXML
    private ImageView adminIMG1;
        @FXML
    private TextField search;
            @FXML
    private ComboBox comb;

    @Override
    public void initialize(URL location, ResourceBundle resources) {      

             System.out.println(NewFXMain.m);
        if (NewFXMain.m == 1){
             pnItems.getChildren().clear();
             Image image = new Image("/GUI/images/joseph.png");
         adminIMG.setImage(image);
        username.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
        titre_dash.setText("Mon Profile");
        Node[] nodes = new Node[1];
            try {
                nodes[0] = FXMLLoader.load(getClass().getResource("/GUI/Modifier_back.fxml"));
    
                nodes[0].setOnMouseEntered(event -> {
                    nodes[0].setStyle("-fx-background-color : #0A0E3F");
                });
                nodes[0].setOnMouseExited(event -> {
                    nodes[0].setStyle("-fx-background-color : #02030A");
                });
                pnItems.getChildren().add(nodes[0]);
                  } catch (IOException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        
        }
        else  if (NewFXMain.m == 2){
             pnItems.getChildren().clear();
             Image image = new Image("/GUI/images/joseph.png");
         adminIMG.setImage(image);
        username.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
        titre_dash.setText("Mon Profile");
        Node[] nodes = new Node[1];
            try {
                nodes[0] = FXMLLoader.load(getClass().getResource("/GUI/Changerpwd.fxml"));
    
                nodes[0].setOnMouseEntered(event -> {
                    nodes[0].setStyle("-fx-background-color : #0A0E3F");
                });
                nodes[0].setOnMouseExited(event -> {
                    nodes[0].setStyle("-fx-background-color : #02030A");
                });
                pnItems.getChildren().add(nodes[0]);
                  } catch (IOException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        
        }
      else{
        ObservableList<String> list = FXCollections.observableArrayList("Nom","Prenom");
        comb.setItems(list);
        Image image1 = new Image("/GUI/images/logoGif11.gif");
        Image image = new Image("/GUI/images/joseph.png");
        adminIMG.setImage(image);
        adminIMG1.setImage(image1);
        username.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
        titre_dash.setText("Liste des utilisateurs !");
        try{
          UtilisateurServices Us = new UtilisateurServices();
                List<Utilisateur> users;
                
                    users = Us.afficherListe();
              
                Node[] nodes = new Node[users.size()];
                for (int i = 0; i < nodes.length; i++) {
                    try {
                        final int j = i;
                        nodes[i] = FXMLLoader.load(getClass().getResource("/GUI/Item.fxml"));
                        //give the items some effect
                        Label nlabel = (Label) nodes[i].lookup("#nom");
                        nlabel.setText(users.get(i).getNom() +" "+ users.get(i).getPrenom());
                        Label elabel = (Label) nodes[i].lookup("#email");
                        elabel.setText(users.get(i).getEmail());
                        Label rlabel = (Label) nodes[i].lookup("#role");
                        rlabel.setText(users.get(i).getRole());
                        Button myButton = (Button) nodes[i].lookup("#button");
                        if(users.get(i).isIs_Actif() == false){
                        myButton.setText("Activer");
                        myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: green;");
                        }
                        else{
                        myButton.setText("Bloquer");
                        myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: red;");
                        }
                        myButton.setOnAction(event -> {
                Utilisateur user = users.get(j);
                if (user.isIs_Actif() == false) {
                    user.setIs_Actif(true);
                    myButton.setText("Bloquer");
                    myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: red;");
                } else {
                    user.setIs_Actif(false);
                    myButton.setText("Activer");
                    myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: green;");
                }
                Us.updateUser(user,user.getId());
                // clear and re-populate the container with updated items
                pnItems.getChildren().clear();
                try {
                    for (int k = 0; k < nodes.length; k++) {
                        pnItems.getChildren().add(nodes[k]);
                    }
                } catch (Exception e) {
                    e.printStackTrace();
                }
                        });
                        nodes[i].setOnMouseEntered(event -> {
                            nodes[j].setStyle("-fx-background-color : #0A0E3F");
                            
                        });
                        nodes[i].setOnMouseExited(event -> {
                            nodes[j].setStyle("-fx-background-color : #02030A");
                        });
                        pnItems.getChildren().add(nodes[i]);
                    } catch (IOException | NullPointerException e) {
                        e.printStackTrace();
                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        search.textProperty().addListener((observable, oldValue, newValue) -> {
            pnItems.getChildren().clear();
            try {
                UtilisateurServices Us = new UtilisateurServices();
                List<Utilisateur> users;
                if(newValue.isEmpty()) {
                    // If the search string is empty, display the complete list
                    users = Us.afficherListe();
                } else {
                    // If the search string is not empty, execute the search and display the results
                    users = Us.afficherListeS(newValue);
                }
                Node[] nodes = new Node[users.size()];
                for (int i = 0; i < nodes.length; i++) {
                    try {
                        final int j = i;
                        nodes[i] = FXMLLoader.load(getClass().getResource("/GUI/Item.fxml"));
                        //give the items some effect
                        Label nlabel = (Label) nodes[i].lookup("#nom");
                        nlabel.setText(users.get(i).getNom() +" "+ users.get(i).getPrenom());
                        Label elabel = (Label) nodes[i].lookup("#email");
                        elabel.setText(users.get(i).getEmail());
                        Label rlabel = (Label) nodes[i].lookup("#role");
                        rlabel.setText(users.get(i).getRole());
                                                Button myButton = (Button) nodes[i].lookup("#button");
               if(users.get(i).isIs_Actif() == false){
                        myButton.setText("Activer");
                        myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: green;");
                        }
                        else{
                        myButton.setText("Bloquer");
                        myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: red;");
               }
                myButton.setOnAction(event -> {
                Utilisateur user = users.get(j);
                if (user.isIs_Actif() == false) {
                    user.setIs_Actif(true);
                    myButton.setText("Bloquer");
                    myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: red;");
                } else {
                    user.setIs_Actif(false);
                    myButton.setText("Activer");
                    myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: green;");
                }
                Us.updateUser(user,user.getId());
                // clear and re-populate the container with updated items
                pnItems.getChildren().clear();
                try {
                    for (int k = 0; k < nodes.length; k++) {
                        pnItems.getChildren().add(nodes[k]);
                    }
                } catch (Exception e) {
                    e.printStackTrace();
                }
                        });
                        nodes[i].setOnMouseEntered(event -> {
                            nodes[j].setStyle("-fx-background-color : #0A0E3F");
                        });
                        nodes[i].setOnMouseExited(event -> {
                            nodes[j].setStyle("-fx-background-color : #02030A");
                        });
                        pnItems.getChildren().add(nodes[i]);
                    } catch (IOException | NullPointerException e) {
                        e.printStackTrace();
                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
        comb.valueProperty().addListener((observable,ildValue,newValue) -> {
                  pnItems.getChildren().clear();
            try {
                UtilisateurServices Us = new UtilisateurServices();
                List<Utilisateur> users = null;
                if(newValue == null) {
                    // If the search string is empty, display the complete list
                    users = Us.afficherListe();
                } else if(newValue == "Nom") {
                    // If the search string is not empty, execute the search and display the results
                    users = Us.triNom();
                }
                 else if(newValue == "Prenom") {
                    // If the search string is not empty, execute the search and display the results
                    users = Us.triPrenom();
                }
                Node[] nodes = new Node[users.size()];
                for (int i = 0; i < nodes.length; i++) {
                    try {
                        final int j = i;
                        nodes[i] = FXMLLoader.load(getClass().getResource("/GUI/Item.fxml"));
                        //give the items some effect
                        Label nlabel = (Label) nodes[i].lookup("#nom");
                        nlabel.setText(users.get(i).getNom() +" "+ users.get(i).getPrenom());
                        Label elabel = (Label) nodes[i].lookup("#email");
                        elabel.setText(users.get(i).getEmail());
                        Label rlabel = (Label) nodes[i].lookup("#role");
                        rlabel.setText(users.get(i).getRole());
                                                Button myButton = (Button) nodes[i].lookup("#button");
               if(users.get(i).isIs_Actif() == false){
                        myButton.setText("Activer");
                        myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: green;");
                        }
                        else{
                        myButton.setText("Bloquer");
                        myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: red;");
               }
               /* myButton.setOnAction(event -> {
                Utilisateur user = users.get(j);
                if (user.isIs_Actif() == false) {
                    user.setIs_Actif(true);
                    myButton.setText("Bloquer");
                    myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: red;");
                } else {
                    user.setIs_Actif(false);
                    myButton.setText("Activer");
                    myButton.setStyle("-fx-background-radius: 20px; -fx-border-color: green;");
                }
                Us.updateUser(user,user.getId());
                // clear and re-populate the container with updated items
                pnItems.getChildren().clear();
                try {
                    for (int k = 0; k < nodes.length; k++) {
                        pnItems.getChildren().add(nodes[k]);
                    }
                } catch (Exception e) {
                    e.printStackTrace();
                }
                        });*/
                        nodes[i].setOnMouseEntered(event -> {
                            nodes[j].setStyle("-fx-background-color : #0A0E3F");
                        });
                        nodes[i].setOnMouseExited(event -> {
                            nodes[j].setStyle("-fx-background-color : #02030A");
                        });
                        pnItems.getChildren().add(nodes[i]);
                    } catch (IOException | NullPointerException e) {
                        e.printStackTrace();
                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
   }


    }
@FXML
    public void btnOverview(ActionEvent actionEvent) throws IOException{

        Parent root = FXMLLoader.load(getClass().getResource("/GUI/Home.fxml"));
        // Get the current scene and set the new scene
        Scene scene = new Scene(root);
        Stage stage = (Stage) ((Node) actionEvent.getSource()).getScene().getWindow();
        stage.setScene(scene);
        stage.show();
        


    }
@FXML
    public void btnSignout(ActionEvent actionEvent){
        pnItems.getChildren().clear();
          try {
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("/GUI/Chat.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) actionEvent.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException | NullPointerException e) {
            e.printStackTrace();
        }
        }
    @FXML
  public void btnOrders(ActionEvent actionEvent) throws IOException{
      pnItems.getChildren().clear();
             Image image = new Image("/GUI/images/joseph.png");
         adminIMG.setImage(image);
        username.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
        titre_dash.setText("Mon Profile");
        Node[] nodes = new Node[1];
                nodes[0] = FXMLLoader.load(getClass().getResource("/GUI/ItemP.fxml"));
                //give the items some effect
                Label nlabel = (Label) nodes[0].lookup("#name");
                nlabel.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
                Label elabel = (Label) nodes[0].lookup("#emailp");
                elabel.setText(NewFXMain.connecteduser.getEmail());
                Label rlabel = (Label) nodes[0].lookup("#rolep");
                rlabel.setText(NewFXMain.connecteduser.getRole());
                Label tlabel = (Label) nodes[0].lookup("#tel");
                tlabel.setText("55025447");
                Label alabel = (Label) nodes[0].lookup("#adresse");
                alabel.setText(NewFXMain.connecteduser.getAddresse());
                Label dlabel = (Label) nodes[0].lookup("#naiss");
                dlabel.setText(NewFXMain.connecteduser.getDate_naiss().toString());
              /*  nodes[0].setOnMouseEntered(event -> {
                    nodes[0].setStyle("-fx-background-color : #0A0E3F");
                });
                nodes[0].setOnMouseExited(event -> {
                    nodes[0].setStyle("-fx-background-color : #02030A");
                });*/
                pnItems.getChildren().add(nodes[0]);
           
        
            }
  @FXML
    public void btnS(ActionEvent actionEvent) throws IOException{
      pnItems.getChildren().clear();
             Image image = new Image("/GUI/images/joseph.png");
         adminIMG.setImage(image);
        username.setText(NewFXMain.connecteduser.getNom() +" "+ NewFXMain.connecteduser.getPrenom());
        titre_dash.setText("Mon Profile");
        Node[] nodes = new Node[1];
                nodes[0] = FXMLLoader.load(getClass().getResource("/GUI/Stat.fxml"));
             
             
                pnItems.getChildren().add(nodes[0]);
    }
            }

   

