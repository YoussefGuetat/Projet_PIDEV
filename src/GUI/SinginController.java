/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Utilisateur;
import Services.UtilisateurServices;
import java.awt.Desktop;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.HttpURLConnection;
import java.net.URI;
import java.net.URISyntaxException;
import java.net.URL;
import java.nio.charset.StandardCharsets;
import java.sql.SQLException;
import java.util.Optional;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.animation.TranslateTransition;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import pidev_desk.NewFXMain;
import utils.MyDB;
import nl.captcha.Captcha;


/**
 * FXML Controller class
 *
 * @author Dell
 */
public class SinginController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
private TextField emailField;
    @FXML
private TextField passwordField;
        @FXML
    private ImageView cap;
            @FXML
    private TextField code;
    
        private VBox vbox;
    private Parent fxml;
    
      public Captcha setCaptcha() {
        Captcha captchaV = new Captcha.Builder(250, 150)
                .addText()
                .addBackground()
                .addNoise()
               // .gimp()
                .addBorder()
                .build();

        System.out.println(captchaV.getImage());
        Image image = SwingFXUtils.toFXImage(captchaV.getImage(), null);

        cap.setImage(image);

        return captchaV;
    }
    Captcha captcha;
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        captcha =  setCaptcha();
    }    
@FXML
private void signin(ActionEvent event) throws SQLException, IOException, NullPointerException, RuntimeException {
    UtilisateurServices Us = new UtilisateurServices();
    Utilisateur p1 = new Utilisateur();
    if (captcha.isCorrect(code.getText())) {
    if(Us.login(emailField.getText(),passwordField.getText()) != null){
        NewFXMain.connecteduser = Us.login(emailField.getText(),passwordField.getText());
        if("Admin".equals(NewFXMain.connecteduser.getRole()) || "Super_Admin".equals(NewFXMain.connecteduser.getRole())){
                   try {
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("/GUI/Home.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
        }
        else{
            if(NewFXMain.connecteduser.isIs_Actif() == true){
                   try {
            // Load the new FXML file
            Parent root = FXMLLoader.load(getClass().getResource("/GUI/Front.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
            }
            else
            {
                     Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
       alert.setTitle("Echec de connexion");
        alert.setHeaderText("Votre compte est bloqué , merci de contacter un Admin");
        Optional<ButtonType> result = alert.showAndWait();  
          if (result.get() == ButtonType.OK) {
           alert.close();
        }
            }
        
        }

    }
    else
    {
     Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
       alert.setTitle("Echec de connexion");
        alert.setHeaderText("E-mail ou mot de passe invalide");
        Optional<ButtonType> result = alert.showAndWait();  
          if (result.get() == ButtonType.OK) {
           alert.close();
        }

    }
    }
    else
    {
                captcha =  setCaptcha();
            code.setText("");
    }
}
@FXML
private void forget1(ActionEvent event) throws IOException {
          NewFXMain.page=1;
        Parent root = FXMLLoader.load(getClass().getResource("Login.fxml"));
            // Get the current scene and set the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
}
@FXML
    private void gggg(ActionEvent event) throws IOException, URISyntaxException {
        // Desktop.getDesktop().browse(new URI("http://www.google.com"));
        // Parent root = FXMLLoader.load(getClass().getResource("GoogleAuth.fxml"));
        // Scene scene = new Scene(root);
        // Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        // stage.setScene(scene);
        // stage.show();

        String myVariable = "undefined"; // replace with your variable value

        try {
            URL url = new URL("http://localhost:5000/my-variable"); // replace with your URL
            HttpURLConnection connection = (HttpURLConnection) url.openConnection();

            // set request method and headers
            connection.setRequestMethod("POST");
            connection.setRequestProperty("Content-Type", "application/json");
            connection.setDoOutput(true);

            // create JSON payload
            String payload = "{\"myVariable\": \"" + myVariable + "\"}";

            // send payload
            OutputStream os = connection.getOutputStream();
            os.write(payload.getBytes(StandardCharsets.UTF_8));
            os.flush();
            os.close();

            // read response
            BufferedReader br = new BufferedReader(new InputStreamReader(connection.getInputStream()));
            String line;
            StringBuilder response = new StringBuilder();
            while ((line = br.readLine()) != null) {
                response.append(line);
            }
            br.close();

            // System.out.println(response.toString());

        } catch (Exception e) {
            e.printStackTrace();
        }

        Desktop.getDesktop().browse(new URI("http://localhost/zeroWateSignIn/"));
        Parent root = FXMLLoader.load(getClass().getResource("/GUI/GoogleAuth.fxml"));
        Scene scene = new Scene(root);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.setScene(scene);
        stage.show();


    }

 
}

    
    

