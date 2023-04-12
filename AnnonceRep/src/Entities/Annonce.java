/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;


import java.io.ByteArrayInputStream;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Base64;

/**
 *
 * @author hgygz
 */
public class Annonce {
      private int id;
    private String titre  , statut , description,domaine;
    private Date date_Crea;
    private String image;

    public Annonce() {
    }

    

    public Annonce(String titre, String description , String domaine , String statut) {
        this.titre = titre;
        this.description = description;
        this.domaine=domaine;
        this.statut=statut;
        
    }
    
public Annonce(int id, String titre, String description, String domaine, String image, java.sql.Date date_Crea, String statut) {
    this.id = id;
    this.titre = titre;
    this.description = description;
    this.domaine = domaine;
    this.image = image; // Update to accept an Image object
    this.date_Crea = date_Crea;
    this.statut = statut;
    
}

    
    public Annonce(int id ,String titre, String description, String domaine ,String image , String statut) {
        this.id=id;
        this.titre = titre;
        this.description = description;
        this.domaine=domaine;
        this.image=image;
        this.statut=statut;
        
    }
    
    
    
    public Annonce(String titre, String description ,Date date_Crea,String image, String domaine , String statut) {
        
        this.titre = titre;
        this.description = description;
        this.domaine=domaine;
        this.date_Crea=date_Crea;
        this.image=image;
        this.statut=statut;
        
    }
    
    public Annonce(String titre, String description ) {
        this.titre = titre;
        this.description = description;
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     
    
    
    
    
    
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getStatut() {
        return statut;
    }

    public void setStatut(String statut) {
        this.statut = statut;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getDomaine() {
        return domaine;
    }

    public void setDomaine(String domaine) {
        this.domaine = domaine;
    }

    public Date getDate_Crea() {
        return date_Crea;
    }

    public void setDate_Crea(Date date_Crea) {
        this.date_Crea = date_Crea;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    @Override
    public String toString() {
        return "Annonce{" + "id=" + id + ", titre=" + titre + ", statut=" + statut + ", description=" + description + ", domaine=" + domaine + ", date_Crea=" + date_Crea + ", image=" + image + '}';
    }

    
    } 