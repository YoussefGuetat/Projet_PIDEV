package entites;

import java.sql.Date;

/**
 * Classe représentant un rendez-vous.
 */
public class RendezVous {
    private int id;

    private Date date_rdv;
    private String etat;
    private String message;
    private String type_lieu;

    public RendezVous(int id, Date date_rdv, String etat, String message, String type_lieu) {
        this.id = id;

        this.date_rdv = date_rdv;
        this.etat = etat;
        this.message = message;
        this.type_lieu = type_lieu;
    }

    public RendezVous() {
    }

    public RendezVous(String etat_text, String type_lieu_text, String img_text, Date date) {
        this.etat = etat_text;
        this.type_lieu = type_lieu_text;
        this.message = img_text;
        this.date_rdv = date;
    }

    public RendezVous(int i, String text, String text0, String text1, Date dateRdv) {
        this.id = i;

        this.etat = text0;
        this.message = text1;
        this.date_rdv = dateRdv;
    }
    
    public RendezVous( Date dateRdv, String etat, String message, String typeLieu) {

        this.date_rdv = dateRdv;
        this.etat = etat;
        this.message = message;
        this.type_lieu = typeLieu;
    }

    // Getters and setters for all the fields

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

   

    public Date getDate_rdv() {
        return date_rdv;
    }

    public void setDate_rdv(Date date_rdv) {
        this.date_rdv = date_rdv;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    public String getType_lieu() {
        return type_lieu;
    }

    public void setType_lieu(String type_lieu) {
        this.type_lieu = type_lieu;
    }

    // Méthode pour lier la colonne colDateRdv à la propriété dateRdvProperty() de l'objet RendezVous
    public Date getDateRdv() {
        return date_rdv;
    }

    // Méthode pour lier la colonne colId à la propriété idProperty() de l'objet RendezVous
    public int getIdProperty() {
        return id;
    }

    // Méthode pour lier la colonne colEtat à la propriété etatProperty() de l'objet RendezVous
    public String getEtatProperty() {
        return etat;
    }

    // Méthode pour lier la colonne colMessage à la propriété messageProperty() de l'objet RendezVous
    public String getMessageProperty() {
        return message;
    }

    // Méthode pour lier la colonne colTypeLieu à la propriété typeLieuProperty() de l'objet RendezVous
    public String getTypeLieuProperty() {
        return type_lieu;
    }
    
    
    
@Override
    public String toString() {
        return "RendezVous{" +"id=" + id +", date_rdv=" + date_rdv  +", etat=" + etat +", message=" + message +'}';
    }
}
    

