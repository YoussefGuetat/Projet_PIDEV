package gui ;

import com.google.zxing.BarcodeFormat;
import com.google.zxing.EncodeHintType;
import com.google.zxing.WriterException;
import com.google.zxing.client.j2se.MatrixToImageWriter;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.qrcode.QRCodeWriter;
import com.itextpdf.text.BaseColor;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.sql.SQLException;
import java.sql.Timestamp;
import java.time.LocalDate;
import java.util.ResourceBundle;


import dao.EvenementDao;
import dao.TicketDao;
import java.io.FileOutputStream;
import java.time.LocalDate;

import com.itextpdf.text.Document;
import com.itextpdf.text.Element;
import com.itextpdf.text.Font;
import com.itextpdf.text.Image;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import entites.Evenement;
import entites.Ticket;
import java.awt.BorderLayout;
import java.awt.Desktop;
import java.awt.image.BufferedImage;
import java.io.File;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Random;
import java.util.UUID;
import java.util.logging.Level;
import java.util.logging.Logger;
import services.EvenementService;
import services.TicketService;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;

public class FXML_AjouterTicketController implements Initializable {

    @FXML
    private ComboBox<Evenement> cb_evenement;

    @FXML
    private TextField tf_nbrplaces;

    @FXML
    private DatePicker dp_date;

    @FXML
    private Button btn_ajouter;
    private EvenementService evenementService;

    private TicketService ticketService;
    @FXML
    void ajouterTicket(ActionEvent event) throws Exception {
        if (cb_evenement.getSelectionModel().isEmpty() || tf_nbrplaces.getText().isEmpty() ) {
            Alert alert = new Alert(AlertType.WARNING);
            alert.setTitle("Attention");
            alert.setHeaderText(null);
            alert.setContentText("Veuillez remplir tous les champs!");
            alert.showAndWait();
        } else {
            try {
                EvenementService es = new EvenementService();
                Evenement evenement = cb_evenement.getSelectionModel().getSelectedItem();
                TicketService ts = new TicketService();
                int nbrplaces = Integer.parseInt(tf_nbrplaces.getText());
                Date date_reservation = Date.valueOf(LocalDate.now());
                Ticket ticket = new Ticket(0, 0, evenement, evenement.getId() + "-" + evenement.getNom(), new Timestamp(date_reservation.getTime()), nbrplaces);
                ts.ajouterTicket(ticket);
                generatePDF(ticket, evenement);
                Alert alert = new Alert(AlertType.INFORMATION);
                alert.setTitle("Succès");
                alert.setHeaderText(null);
                alert.setContentText("Ticket ajouté avec succès!");
                alert.showAndWait();
            } catch (SQLException | IOException e) {
                Alert alert = new Alert(AlertType.ERROR);
                alert.setTitle("Erreur");
                alert.setHeaderText(null);
                alert.setContentText("Erreur lors de l'ajout du ticket!");
                alert.showAndWait();
                e.printStackTrace();
            } catch (NumberFormatException e) {
                Alert alert = new Alert(AlertType.WARNING);
                alert.setTitle("Attention");
                alert.setHeaderText(null);
                alert.setContentText("Le nombre de places doit être un entier!");
                alert.showAndWait();
            }
        }
    }

  
       @Override
   public void initialize(URL location, ResourceBundle resources) {
    evenementService = new EvenementService();
    ticketService = new TicketService();
    List<Evenement> evenements = evenementService.getAllEvenement();
    cb_evenement.getItems().addAll(evenements); 
}

    

 public static void generatePDF(Ticket ticket, Evenement evenement) throws Exception {
    Document document = new Document();
    String fileName = "ticket_" + evenement.getId() + ".pdf";

    // Ouvrir une fenêtre de choix de fichier pour sélectionner l'emplacement où enregistrer le fichier PDF
    FileChooser fileChooser = new FileChooser();
    fileChooser.setTitle("Enregistrer le ticket");
    fileChooser.setInitialFileName(fileName);
    File selectedFile = fileChooser.showSaveDialog(null);

    if (selectedFile != null) {
        // Enregistrer le fichier PDF à l'emplacement sélectionné
        PdfWriter.getInstance(document, new FileOutputStream(selectedFile));
        document.open();

        // Ajouter les informations du ticket
        Font fontTitre = new Font(Font.FontFamily.TIMES_ROMAN, 24, Font.BOLD);
        Paragraph titre = new Paragraph("Ticket pour l'événement : " + evenement.getNom(), fontTitre);
        titre.setAlignment(Element.ALIGN_CENTER);
        titre.setSpacingAfter(20f);
        document.add(titre);
        
          // Ajouter le code QR
           String qrCodeText = ticket.getReference()+" NBRP: "+ticket.getNbrplace(); // la chaîne de caractères que vous voulez encoder
          int size = 250;
    // créer une map avec les paramètres pour le code QR (la taille, le type de correction d'erreur, etc.)
    Map<EncodeHintType, Object> hintMap = new HashMap<EncodeHintType, Object>();
    hintMap.put(EncodeHintType.ERROR_CORRECTION, com.google.zxing.qrcode.decoder.ErrorCorrectionLevel.L);
    hintMap.put(EncodeHintType.CHARACTER_SET, "UTF-8");
    hintMap.put(EncodeHintType.MARGIN, 1);
    QRCodeWriter qrCodeWriter = new QRCodeWriter();
    BitMatrix byteMatrix = qrCodeWriter.encode(qrCodeText, BarcodeFormat.QR_CODE, size, size, hintMap);
    int width = byteMatrix.getWidth();
    BufferedImage imageQR = new BufferedImage(width, width, BufferedImage.TYPE_INT_RGB);
    imageQR.createGraphics();

    // ajouter les pixels noirs et blancs dans l'image QR
    for (int i = 0; i < width; i++) {
        for (int j = 0; j < width; j++) {
            imageQR.setRGB(i, j, byteMatrix.get(i, j) ? 0xFF000000 : 0xFFFFFFFF);
        }
    }

    // ajouter l'image QR dans le document PDF
    Image qrCodeImage = Image.getInstance(imageQR, null);
    qrCodeImage.setAlignment(Element.ALIGN_CENTER);
    qrCodeImage.scaleAbsolute(150, 150);
    document.add(qrCodeImage);

        
        
        Font font = new Font(Font.FontFamily.TIMES_ROMAN, 14); // créer une police avec une taille de 12 points

        Paragraph info = new Paragraph("Informations du ticket :", font);
        info.setAlignment(Element.ALIGN_CENTER);
        info.setSpacingBefore(20f);
        info.setSpacingAfter(10f);
        document.add(info);

        Paragraph ref = new Paragraph("Référence : " + ticket.getReference(), font);
        ref.setSpacingAfter(5f);
        document.add(ref);

        Paragraph date = new Paragraph("Date de réservation : " + ticket.getDate_reservation(), font);
        date.setSpacingAfter(5f);
        document.add(date);

        Paragraph places = new Paragraph("Nombre de places : " + ticket.getNbrplace(), font);
        places.setSpacingAfter(20f);
        document.add(places);

       
      

        document.close();

        // Ouvrir le fichier PDF une fois qu'il est enregistré
        Desktop.getDesktop().open(selectedFile);
    }
}
 
 private void redirectToList(){
            Parent root;
            try {
            
            root = FXMLLoader.load(getClass().getResource("FXML_AffichierTicket.fxml"));
            Scene c=new Scene(root);
             Stage stage=(Stage)btn_ajouter.getScene().getWindow();
            stage.setScene(c);
        } catch (IOException ex) {
            Logger.getLogger(FXML_AjouterTicketController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void retour(MouseEvent event) {
        this.redirectToList();
    }


}