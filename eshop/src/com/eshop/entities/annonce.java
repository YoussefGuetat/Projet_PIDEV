package com.eshop.entities;

import com.codename1.ui.Image;
import java.util.Date;
import com.eshop.utils.*;

public class annonce {
      private int id;
    private String titre  , statut , description,domaine;
    private Date date_Crea;
    private Image image;

    public annonce() {
    }

    

    public annonce(String titre, String description , String domaine , String statut) {
        this.titre = titre;
        this.description = description;
        this.domaine=domaine;
        this.statut=statut;
        
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

    public Image getImage() {
        return image;
    }

    public void setImage(Image image) {
        this.image = image;
    }

    @Override
    public String toString() {
        return "annonce{" + "id=" + id + ", titre=" + titre + ", statut=" + statut + ", description=" + description + ", domaine=" + domaine + '}';
    }

   
    
   

   

    
   
    
}
