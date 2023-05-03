package entites;

import com.google.zxing.BarcodeFormat;
import com.google.zxing.EncodeHintType;
import com.google.zxing.WriterException;
import com.google.zxing.client.j2se.MatrixToImageWriter;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.qrcode.QRCodeWriter;
import java.awt.image.BufferedImage;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.sql.Date;
import java.sql.Timestamp;
import java.time.LocalDate;
import java.util.HashMap;
import java.util.Map;
import java.util.UUID;
import javax.imageio.ImageIO;

public class Ticket {
    private int id;
    private int utilisateur_id;
    private Evenement evenement;
    private String reference;
    private Timestamp date_reservation;
    private int nbrplace;
    
    public Ticket() {}
    
    public Ticket(int id, int utilisateur_id, Evenement evenement, String reference, Timestamp date_reservation, int nbrplace) {
        this.id = id;
        this.utilisateur_id = utilisateur_id;
        this.evenement = evenement;
        this.reference = reference;
        this.date_reservation = date_reservation;
        this.nbrplace = nbrplace;
    }

   
    
    public int getId() {
        return id;
    }
    
    public void setId(int id) {
        this.id = id;
    }
    
    public int getUtilisateur_id() {
        return utilisateur_id;
    }
    
    public void setUtilisateur_id(int utilisateur_id) {
        this.utilisateur_id = utilisateur_id;
    }
    
    public Evenement getEvenement() {
        return evenement;
    }
    
    public void setEvenement(Evenement evenement) {
        this.evenement = evenement;
    }
    
    public String getReference() {
        return reference;
    }
    
    public void setReference(String reference) {
        this.reference = reference;
    }
    
    public Timestamp getDate_reservation() {
        return date_reservation;
    }
    
    public void setDate_reservation(Timestamp date_reservation) {
        this.date_reservation = date_reservation;
    }
    
    public int getNbrplace() {
        return nbrplace;
    }
    
    public void setNbrplace(int nbrplace) {
        this.nbrplace = nbrplace;
    }
     public Ticket(int id, String reference, int nbrplace, Timestamp date_reservation) {
        this.id = id;
        this.reference = reference;
        this.nbrplace = nbrplace;
        this.date_reservation = date_reservation;
    }
    
public String getQRCodeText() {
    // Générer un UUID aléatoire pour le ticket
    String uuid = UUID.randomUUID().toString();

    // Format de la chaîne de caractères à encoder dans le code QR : UUID-TicketID
    String qrCodeText =  getReference()+ "-" + getNbrplace()+ "-" + getDate_reservation();

    return qrCodeText;
}

    @Override
    public String toString() {
        return "Ticket{" + "id=" + id + ", utilisateur_id=" + utilisateur_id + ", evenement=" + evenement + ", reference=" + reference + ", date_reservation=" + date_reservation + ", nbrplace=" + nbrplace + '}';
    }

   

}
