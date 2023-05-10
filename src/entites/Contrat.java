package entites;

import java.io.File;
import java.sql.Date;

/**
 * Classe représentant un contrat.
 */
public class Contrat {

    public static void add(Contrat contrat) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    private int id;
    private String date_contrat;
    private int duree_contrat;
    private String image;
    private float taux_profit;

    public Contrat(int id, String date_contrat, int duree_contrat, String image, float taux_profit) {
        this.id = id;
        this.date_contrat = date_contrat;
        this.duree_contrat = duree_contrat;
        this.image = image;
        this.taux_profit = taux_profit;
    }

    public Contrat(String date_contrat, int duree_contrat, String image, float taux_profit) {
    this.date_contrat = date_contrat;
    this.duree_contrat = duree_contrat;
    this.image = image;
    this.taux_profit = taux_profit;
    }
    
    
    
    public Contrat( int duree_contrat,  float taux_profit) {
    this.duree_contrat = duree_contrat;
    this.taux_profit = taux_profit;
}

    public Contrat() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }


    // Getters and setters for all the fields

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDate_contrat() {
        return date_contrat;
    }

    public void setDate_contrat(String date_contrat) {
        this.date_contrat = date_contrat;
    }

    public int getDuree_contrat() {
        return duree_contrat;
    }

    public void setDuree_contrat(int duree_contrat) {
        this.duree_contrat = duree_contrat;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public float getTaux_profit() {
        return taux_profit;
    }

    public void setTaux_profit(float taux_profit) {
        this.taux_profit = taux_profit;
    }

    

    @Override
    public String toString() {
        return "Contrat{" +
                "id=" + id +
                ", date_contrat=" + date_contrat +
                ", duree_contrat=" + duree_contrat +
                ", image='" + image + '\'' +
                ", taux_profit=" + taux_profit +
                '}';
    }

    

    
}
