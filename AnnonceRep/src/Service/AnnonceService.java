/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;
import Entities.ICRUD;
import Entities.Annonce;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import Utils.MyDB;
import java.awt.Image;
import java.sql.Date;
import java.sql.DriverManager;
import java.text.ParseException;
import java.text.SimpleDateFormat;


/**
 *
 * @author hgygz
 */
public class AnnonceService implements ICRUD<Annonce>{
    
    
    
    public Connection conx;
    public Statement stm;

    public AnnonceService() {
        conx = MyDB.getInstance().getConx();

    }

 public void ajouter(Annonce a) {
    String req = "INSERT INTO `Annonce`(`titre`, `description`, `date_Crea`, `image`, `domaine`, `statut`) VALUES ('" 
        + a.getTitre() + "','" + a.getDescription() + "'," 
        + (a.getDate_Crea() != null ? "'" + a.getDate_Crea() + "'" : "NULL") + ",'" 
        + a.getImage() + "','" + a.getDomaine() + "','" + a.getStatut() + "')";
    try {
        stm = conx.createStatement();
        stm.executeUpdate(req);
        System.out.println("Annonce est bien ajoutée");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
}


    
 @Override
public List<Annonce> afficherListe() throws SQLException {
    String req = "SELECT * FROM `Annonce`";
    stm = conx.createStatement();
    ResultSet rs = stm.executeQuery(req);
    List<Annonce> annonces = new ArrayList<Annonce>();
    while (rs.next()) {
        int id = rs.getInt(1);
        String titre = rs.getString(2);
        String description = rs.getString(3);
        String domaine = rs.getString(4);
        String imageStr = rs.getString(5);
        java.sql.Date date_Crea = rs.getDate(6);
        String statut = rs.getString(7);

       
        

        Annonce annonce = new Annonce(id, titre, description, domaine,imageStr,date_Crea , statut);
        annonces.add(annonce);
    }

    // Close ResultSet, Statement, and Connection properly
    if (rs != null) {
        rs.close();
    }
    if (stm != null) {
        stm.close();
    }
    if (conx != null) {
        conx.close();
    }

    return annonces;
}



 @Override
public void modifier(Annonce a, int id) {
    try {
        String requete = "UPDATE Annonce SET titre=?, domaine=?, description=?, statut=?, image=? WHERE id=?";
        PreparedStatement pst = conx.prepareStatement(requete);
        pst.setString(1, a.getTitre());
        pst.setString(2, a.getDomaine());
        pst.setString(3, a.getDescription());
        pst.setString(4, a.getStatut());
        pst.setString(5, a.getImage());
        pst.setInt(6, id); // Set the ID as the last parameter

        pst.executeUpdate();
        System.out.println("Annonce modifiée !");
    } catch (SQLException ex) {
        System.err.println(ex.getMessage());
    }
}


    @Override
public void supprimer(int id, Connection conx) {
    try {
        String requete = "DELETE FROM Annonce WHERE id=?";
        PreparedStatement pst = conx.prepareStatement(requete);
        pst.setInt(1, id);
        pst.executeUpdate();
        System.out.println("Annonce supprimée!");

        // Close the PreparedStatement
        pst.close();
    } catch (SQLException ex) {
        System.err.println(ex.getMessage());
    }
}

  





}
