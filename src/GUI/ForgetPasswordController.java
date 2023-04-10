/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.net.URL;
import java.util.Optional;
import java.util.Properties;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TextField;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

/**
 * FXML Controller class
 *
 * @author Dell
 */
public class ForgetPasswordController implements Initializable {

    @FXML
    private TextField emailField;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void sendMail(ActionEvent event) {
        // Set the SMTP host and port for sending the email
    String host = "smtp.gmail.com";
    String port = "587";
 String username = "arco.sc0156@gmail.com";
    String password = "hghseksuroiqviag";
   
    // Set the properties for the email session
    Properties properties = new Properties();
    properties.put("mail.smtp.host", host);
    properties.put("mail.smtp.port", "587");
    properties.put("mail.smtp.auth", "true"); // Enable authentication
    properties.put("mail.smtp.starttls.enable", "true"); // Enable TLS encryption
    
    // Create a new email session using the specified properties
    Session session = Session.getDefaultInstance(properties, new javax.mail.Authenticator() {
        @Override
        protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
          return new javax.mail.PasswordAuthentication(username, password);
        }
    });
    
    try {
        // Create a new email message
        Message msg = new MimeMessage(session);

        // Set the "From" address for the email
       // msg.setFrom(new InternetAddress("ahmed.benabid2503@gmail.com"));
        
        // Add the "To" address for the email (including the recipient's name)
            msg.setRecipients(Message.RecipientType.TO, InternetAddress.parse("guetat1youssef@gmail.com"));

        // Set the subject and body text for the email
        msg.setSubject("Demande d'une charge.");
        msg.setText("Mr , j'ai besoin d'une charge le plus tôt possible et merci!");
                // Create an alert to notify the user that the email was sent successfully

               Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
       alert.setTitle("Confirmation d'envoie");
        alert.setHeaderText("Voulez-vous envoyez ce mail à  ?");
        alert.setContentText("Cette action est requise.");

        // Show the confirmation dialog and wait for the user's response
        Optional<ButtonType> result = alert.showAndWait();  

        // Send the email
         
          if (result.get() == ButtonType.OK) {
              System.out.println("En cours d'envoie...");
           Transport.send(msg);
                   System.out.println("Envoyé avec succès !");
        } else {
            // Close the dialog and do nothing
            alert.close();
            System.out.println("Echec d'envoie!");
        }

      
        // Print a message to the console to indicate that the email was sent successfully

        
      
        
       
    } catch (AddressException e) {
        // Create an alert to notify the user that there was an error with the email address
        e.printStackTrace();
    System.out.println("Failed to send email: " + e.getMessage());
    } catch (MessagingException e) {
        e.printStackTrace();
    System.out.println("Failed to send email: " + e.getMessage());
    }
    }
    
}
