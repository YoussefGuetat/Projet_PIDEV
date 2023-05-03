/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;
import javax.mail.*;
import javax.mail.internet.*;
import entites.Evenement;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.StandardCopyOption;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
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
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import services.EvenementService;

/**
 * FXML Controller class
 *
 * @author
 */
public class FXML_AjouterEvenementController implements Initializable {

    @FXML
    private TextField txtnom;
    @FXML
    private TextField txtadresse;
    @FXML
    private TextField txtnbrplaces;
    @FXML
    private TextField txtobjet;
    @FXML
    private TextField txtdescription;
    @FXML
    private DatePicker dateevent;
    @FXML
    private ImageView imageview;
    @FXML
    private Button uploadbtn;
    @FXML
    private Button ajouterbtn;
    @FXML
    private Button retourbtn;

    private String imagePath = "";
    private File selectedFile;
    private final String imageDirectory = "C:/xampp/htdocs/";

    public Connection conx;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        try {
            conx = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
        } catch (SQLException ex) {
            System.out.println("Failed to connect to database: " + ex.getMessage());
        }
    }

    @FXML
    private void uploadImage(ActionEvent event) {
        FileChooser fc = new FileChooser();
        selectedFile = fc.showOpenDialog(null);

        if (selectedFile != null) {
            imagePath = selectedFile.getName();
            Image image = new Image(selectedFile.toURI().toString());
            imageview.setImage(image);
        } else {
            System.out.println("File is not valid!");
        }
    }

 @FXML
public void ajouterEvenement(ActionEvent event) {
    String nom = txtnom.getText();
    String adresse = txtadresse.getText();
    int nbrplaces = Integer.parseInt(txtnbrplaces.getText());
    String objet = txtobjet.getText();
    String description = txtdescription.getText();
    LocalDate dateevent = LocalDate.now();

    // Validate input fields for nom, adresse and objet
    if (!nom.matches("^[A-Z][a-zA-Z]{2,}$")) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setHeaderText(null);
        alert.setContentText("Le champ nom doit commencer par une majuscule et contenir au moins 3 lettres!");
        alert.showAndWait();
        return;
    }
    if (!adresse.matches("^\\d+\\s[A-z]+\\s[A-z]+")) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setHeaderText(null);
        alert.setContentText("Le champ adresse doit être de la forme 'numéro rue ville'!");
        alert.showAndWait();
        return;
    }
    // Validate input fields for nom, adresse and objet
    if (nbrplaces <= 0) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setHeaderText(null);
        alert.setContentText("Le champ nbrplace doit etre positive!");
        alert.showAndWait();
        return;
    }
    if (!objet.matches("^[A-Z][a-zA-Z]{2,}$")) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setHeaderText(null);
        alert.setContentText("Le champ objet doit commencer par une majuscule et contenir au moins 3 lettres!");
        alert.showAndWait();
        return;
    }

    // Check if a file has been selected
    if (selectedFile == null) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner une photo!");
        alert.showAndWait();
        return;
    }

    // Save the image in the project directory
    String imageDirectory = "C:\\Users\\ASUS\\Documents\\NetBeansProjects\\GS_Event\\images\\";

    String fileName = nom + "_" + dateevent.toString() + ".png";
   

    File destination = new File(imageDirectory + fileName);
     String fileName1 = imageDirectory + fileName;
    try {
        Files.copy(selectedFile.toPath(), destination.toPath(), StandardCopyOption.REPLACE_EXISTING);
    } catch (IOException ex) {
        System.out.println("Failed to save image: " + ex.getMessage());
    }

    // Save the image path and event details in the database
    try {
        String req = "INSERT INTO `evenement`(`nom`, `adresse`, `photo`, `nbrplaces`, `objet`, `description`, `dateevent`) "
                + "VALUES (?,?,?,?,?,?,?)";
        PreparedStatement ps = conx.prepareStatement(req);
        ps.setString(1, nom);
        ps.setString(2, adresse);
        ps.setString(3, fileName1);
        ps.setInt(4, nbrplaces);
        ps.setString(5, objet);
        ps.setString(6, description);
        ps.setDate(7, java.sql.Date.valueOf(dateevent));
        ps.executeUpdate();
        // Send email notification
     // Informations de connexion SMTP pour Mailtrap
    String host = "sandbox.smtp.mailtrap.io";
    String port = "2525";
    String username = "d6536a4660a972";
    String password = "223ab25df24358";

 

    // Adresse e-mail de l'expéditeur et du destinataire
    String from = "aymen.trifi@SandBox.tn";
    String to = "Client@Client.com";

    // Création de la session
    Properties props = new Properties();
    props.put("mail.smtp.auth", "true");
    props.put("mail.smtp.starttls.enable", "true");
    props.put("mail.smtp.host", host);
    props.put("mail.smtp.port", port);
    Session session = Session.getInstance(props, new Authenticator() {
      protected PasswordAuthentication getPasswordAuthentication() {
        return new PasswordAuthentication(username, password);
      }
    });

    try {
      // Création du message
      Message message = new MimeMessage(session);
      message.setFrom(new InternetAddress(from));
      message.setRecipients(Message.RecipientType.TO, InternetAddress.parse(to));
     message.setSubject(" Cest notre nouveau evenement viens nous rjoindre");
        message.setText("Cest notre nouveau evenement viens nous rjoindre : \n\nNom : " +nom  + "\nAdresse : " + adresse);

      // Envoi du message
      Transport.send(message);

      System.out.println("Le message a été envoyé avec succès.");

    } catch (MessagingException e) {
      throw new RuntimeException(e);
    }
        System.out.println("Evenement ajouté avec succès");
        redirectToList();
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
    
}


      private void redirectToList(){
            Parent root;
            try {
            
            root = FXMLLoader.load(getClass().getResource("FXML_AffichierEvenement.fxml"));
            Scene c=new Scene(root);
             Stage stage=(Stage)ajouterbtn.getScene().getWindow();
            stage.setScene(c);
        } catch (IOException ex) {
            Logger.getLogger(FXML_AjouterEvenementController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void retour(MouseEvent event) {
        this.redirectToList();
    }

  
}
