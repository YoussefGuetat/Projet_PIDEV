/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;


import java.io.ByteArrayInputStream;
import java.io.Serializable;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Base64;
import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

/**
 *
 * @author hgygz
 */
public class Annonce {
      private int id;
    private String titre  , statut , description,domaine;
    private Date date_Crea;
    private String image;
    
   
    
  

    
      @Entity
public class Bmc implements Serializable {
        
private int annonce_id;
    // other fields and methods
    
    public void setAnnonce_id(int annonce_id) {
        this.annonce_id = annonce_id;
    }        

    @Id
    private int id;
    private String partenaires_cles , activites_cles , ressources_cles,proposition_valeur,relations_clients,canaux,segments_marche;
    private double couts,revenus;
        private Bmc bmc;
        
        
           @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "annonce_id")
    private Annonce annonce;
           
           public void setAnnonce(Annonce annonce) {
    this.annonce = annonce;
}

        public Bmc() {
        }

        public Bmc(int id, String partenaires_cles, String activites_cles, String ressources_cles, String proposition_valeur, String relations_clients, String canaux, String segments_marche, double couts, double revenus) {
            this.id = id;
            this.partenaires_cles = partenaires_cles;
            this.activites_cles = activites_cles;
            this.ressources_cles = ressources_cles;
            this.proposition_valeur = proposition_valeur;
            this.relations_clients = relations_clients;
            this.canaux = canaux;
            this.segments_marche = segments_marche;
            this.couts = couts;
            this.revenus = revenus;
           
        }
        
        
        
        public Bmc(String partenaires_cles, String activites_cles, String ressources_cles, String proposition_valeur, String relations_clients, String canaux, String segments_marche, double couts, double revenus) {
            this.partenaires_cles = partenaires_cles;
            this.activites_cles = activites_cles;
            this.ressources_cles = ressources_cles;
            this.proposition_valeur = proposition_valeur;
            this.relations_clients = relations_clients;
            this.canaux = canaux;
            this.segments_marche = segments_marche;
            this.couts = couts;
            this.revenus = revenus;
            this.bmc = bmc;
        }
        
        
        
         public Bmc(String partenaires_cles, String activites_cles, String ressources_cles, String proposition_valeur, String relations_clients, String canaux, String segments_marche) {
            this.partenaires_cles = partenaires_cles;
            this.activites_cles = activites_cles;
            this.ressources_cles = ressources_cles;
            this.proposition_valeur = proposition_valeur;
            this.relations_clients = relations_clients;
            this.canaux = canaux;
            this.segments_marche = segments_marche;
            
          
        }
        
        

        public int getId() {
            return id;
        }

        public void setId(int id) {
            this.id = id;
        }

        public String getPartenaires_cles() {
            return partenaires_cles;
        }

        public void setPartenaires_cles(String partenaires_cles) {
            this.partenaires_cles = partenaires_cles;
        }

        public String getActivites_cles() {
            return activites_cles;
        }

        public void setActivites_cles(String activites_cles) {
            this.activites_cles = activites_cles;
        }

        public String getRessources_cles() {
            return ressources_cles;
        }

        public void setRessources_cles(String ressources_cles) {
            this.ressources_cles = ressources_cles;
        }

        public String getProposition_valeur() {
            return proposition_valeur;
        }

        public void setProposition_valeur(String proposition_valeur) {
            this.proposition_valeur = proposition_valeur;
        }

        public String getRelations_clients() {
            return relations_clients;
        }

        public void setRelations_clients(String relations_clients) {
            this.relations_clients = relations_clients;
        }

        public String getCanaux() {
            return canaux;
        }

        public void setCanaux(String canaux) {
            this.canaux = canaux;
        }

        public String getSegments_marche() {
            return segments_marche;
        }

        public void setSegments_marche(String segments_marche) {
            this.segments_marche = segments_marche;
        }

        public double getCouts() {
            return couts;
        }

        public void setCouts(double couts) {
            this.couts = couts;
        }

        public double getRevenus() {
            return revenus;
        }

        public void setRevenus(double revenus) {
            this.revenus = revenus;
        }

        @Override
        public String toString() {
            return "Bmc{" + "id=" + id + ", partenaires_cles=" + partenaires_cles + ", activites_cles=" + activites_cles + ", ressources_cles=" + ressources_cles + ", proposition_valeur=" + proposition_valeur + ", relations_clients=" + relations_clients + ", canaux=" + canaux + ", segments_marche=" + segments_marche + ", couts=" + couts + ", revenus=" + revenus + ", bmc=" + bmc + '}';
        }

        
       
        
    
    }
    

private Bmc bmc;
    
     public Bmc getBmc() {
        return bmc;
    }
        public void setBmc(Bmc bmc) {
        this.bmc = bmc;
    }


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
        return  titre ;
    }

   

   

    
    
    
    
    
    
    
    
    
  
    
     }

