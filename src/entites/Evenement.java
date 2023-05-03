/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entites;
import java.sql.Date;
import java.sql.Timestamp;
import java.time.LocalDate;

/**
 *
 * @author ASUS
 */
public class Evenement {
    public int id;
    private String nom;
    private String adresse;
    public String photo;
    private int nbrplaces;
    private String objet;
    private String description;
    public Date dateevent;
    
    public Evenement() {}
    
    public Evenement(int id, String nom, String adresse, String photo, int nbrplaces, String objet, String description, Date dateevent) {
        this.id = id;
        this.nom = nom;
        this.adresse = adresse;
        this.photo = photo;
        this.nbrplaces = nbrplaces;
        this.objet = objet;
        this.description = description;
        this.dateevent = dateevent;
    }
    public Evenement(String nom, String adresse, String photo, Date  dateevent) {
    this.nom = nom;
    this.adresse = adresse;
    this.photo = photo;
    this.dateevent = dateevent;
}

    public Evenement(String nom, String adresse, String photo, int nbrplaces, String objet, String description, Date dateevent) {
    this.nom = nom;
    this.adresse = adresse;
    this.photo = photo;
    this.nbrplaces = nbrplaces;
    this.objet = objet;
    this.description = description;
    this.dateevent = dateevent;
}
    
    public Evenement(String nom, String adresse, String photo, int nbrplaces, String objet, String description) {
    this.nom = nom;
    this.adresse = adresse;
    this.photo = photo;
    this.nbrplaces = nbrplaces;
    this.objet = objet;
    this.description = description;
}

      public Evenement(int id, String nom, String adresse, int nbrplaces, String objet, String description, Date dateevent) {
        this.id = id;
        this.nom = nom;
        this.adresse = adresse;
        this.nbrplaces = nbrplaces;
        this.objet = objet;
        this.description = description;
        this.dateevent = dateevent;
    }

   public Evenement(int id, String nom, String adresse, int nbrplaces, Date dateevent) {
    this.id = id;
    this.nom = nom;
    this.adresse = adresse;
    this.nbrplaces = nbrplaces;
    this.dateevent = dateevent;
}

    public Evenement(String string, String string0) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Evenement(String nom, String adresse, String objet) {
     this.nom = nom;
    this.adresse = adresse;
    this.objet = objet;    }

    public Evenement(int aInt, String string, String string0, LocalDate toLocalDate, LocalDate toLocalDate0, String string1, int aInt0) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
public Evenement(String nom) {
    this.nom = nom;
    this.nbrplaces = nbrplaces;
}



    public int getId() {
        return id;
    }
    
    public void setId(int id) {
        this.id = id;
    }
    
    public String getNom() {
        return nom;
    }
    
    public void setNom(String nom) {
        this.nom = nom;
    }
    
    public String getAdresse() {
        return adresse;
    }
    
    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }
    
    public String getPhoto() {
        return photo;
    }
    
    public void setPhoto(String photo) {
        this.photo = photo;
    }
    
    public int getNbrplaces() {
        return nbrplaces;
    }
    
    public void setNbrplaces(int nbrplaces) {
        this.nbrplaces = nbrplaces;
    }
    
    public String getObjet() {
        return objet;
    }
    
    public void setObjet(String objet) {
        this.objet = objet;
    }
    
    public String getDescription() {
        return description;
    }
    
    public void setDescription(String description) {
        this.description = description;
    }
    
    public Date getDateevent() {
        return dateevent;
    }
    
    public void setDateevent(Date dateevent) {
        this.dateevent = dateevent;
    }
    
    @Override
    public String toString() {
        return "" + nom  +" , Adresse " + adresse + " , Nombre de place " + nbrplaces +" , Date " + dateevent +"";
    }

    public String getDate() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public void setDate(Date date) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
public String getPhotoPath() {
        String imagePath;
    return imagePath = "C:\\Users\\ASUS\\Documents\\NetBeansProjects\\GS_Event\\images\\aaa.png"; // où photoPath est une propriété de la classe Evenement contenant le chemin d'accès à la photo de l'événement
}

}



