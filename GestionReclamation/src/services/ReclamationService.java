/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.CrudReclamation;
import entities.Reclamation;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import utils.MyDB;

/**
 *
 * @author Mega-PC
 */
public class ReclamationService implements CrudReclamation<Reclamation>{

    public Connection conx;
    public Statement stm;
    
    public ReclamationService(){
        conx = MyDB.getInstance().getConx();
    }
    
    @Override
    public void ajouter(Reclamation r) {
        String req = "INSERT INTO reclamation "
                + "(utilisateur_id,assist_id,date_rec,sujet,contenu,etat) "
                + "VALUES (?,?,?,?,?,?)";
        
        try{
            PreparedStatement ps = conx.prepareStatement(req);
            ps.setInt(1, r.getUtilisateur_id());
            ps.setInt(2, r.getAssist_id());
            ps.setDate(3,new java.sql.Date(r.getDate_rec().getTime()) );
            ps.setString(4, r.getSujet());
            ps.setString(5, r.getContenu());
            ps.setString(6, r.getEtat());
            ps.executeUpdate();
            System.out.println("Ajout Successfully");
        }catch(SQLException e){
            System.err.println(e.getMessage());
        }
    }

    @Override
    public List<Reclamation> afficherListe() throws SQLException {
        String req = "SELECT * FROM `reclamation`";
        stm = conx.createStatement();
        ResultSet rs = stm.executeQuery(req);
        List<Reclamation> reclamations  = new ArrayList<Reclamation>();
        while (rs.next()) {
            Reclamation r = new Reclamation(rs.getInt("id"),
             rs.getInt("Utilisateur_id"),
             rs.getInt("Assist_id"),
             rs.getDate("Date" ),
             rs.getString("Sujet"),
             rs.getString("Contenu"),
             rs.getString("Etat"));
            reclamations.add(r);
        }

        return reclamations;
    }
    public List<Reclamation> getAllReclamations() throws SQLException {
        List<Reclamation> reclamations = new ArrayList<>();
        Connection con = MyDB.getInstance().getConx();
        PreparedStatement ps = con.prepareStatement("SELECT * FROM reclamation");
        ResultSet rs = ps.executeQuery();
        while (rs.next()) {
            Reclamation reclamation = new Reclamation(rs.getInt("id"), rs.getInt("Utilisateur_id"), rs.getInt("Assist_id"), rs.getDate("Date").java.sql.Date(r.getDate_rec().getTime()),
                    rs.getString("Sujet"), rs.getString("Contenu"),rs.getString("Etat"));
            reclamations.add(reclamation);
        }
        return reclamations;
    }
    @Override
    public void supprimer(int id) {
        try {
            String req = "DELETE FROM reclamation WHERE id = " + id;
            Statement st = conx.createStatement();
            st.executeUpdate(req);
            System.out.println("Reclamation supprimé !");
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
    }

    @Override
    public void modifier(Reclamation e) {
        try {
            String req = "UPDATE reclamation SET Utilisateur_id = '" + r.getUtilisateur_id() + "', Assist_id= '" + r.getAssist_id() + "', Date = '" + r.getDate() + "', Sujet = '" + r.getSujet() + "' , Contenu= '" + r.getContenu() + "' , Etat = '" + r.getEtat() + "'  WHERE reclamation.id = " + r.getId();
            Statement st = conx.createStatement();
            st.executeUpdate(req);
            System.out.println("Reclamation mis à jour !");
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
    }

    public boolean ajouterReclamation(Reclamation evenement) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   public List<Reclamation> getAllReclamation() {
    List<Reclamation> evenements = new ArrayList<>();
    try {
        Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
        Statement statement = connection.createStatement();
        ResultSet resultSet = statement.executeQuery("SELECT * FROM reclamation");
        while (resultSet.next()) {
           Reclamation reclamation = new Reclamation();
            reclamation.setId(resultSet.getInt("id"));
           reclamation.setUtilisateur_id(resultSet.getInt("Utilisateur_id"));
           reclamation.setAssist_id(resultSet.getInt("Assist_id"));
            reclamation.setDate(resultSet.getDate("Date" ));
            reclamation.setSujet(resultSet.getString("Sujet"));
            reclamation.setContenu(resultSet.getString("Contenu"));
            reclamation.setEtat(resultSet.getString("Etat"));
       
            reclamations.add(reclamation);
        }
        connection.close();
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return reclamations;
}
    public Reclamation getReclamationById(int id) {
        Connection conn = MyDB.getInstance().getConx();
        Reclamation reclamation = null;

        try {
            String query = "SELECT * FROM Reclamation WHERE id = ?";
            PreparedStatement statement = conn.prepareStatement(query);
            statement.setInt(1, id);

            ResultSet resultSet = statement.executeQuery();

            if (resultSet.next()) {
                reclamation = new Reclamation();
                reclamation.setId(resultSet.getInt("id"));
              reclamation.setUtilisateur_id(resultSet.getInt("Utilisateur_id"));
           reclamation.setAssist_id(resultSet.getInt("Assist_id"));
            reclamation.setDate(resultSet.getDate("Date" ));
            reclamation.setSujet(resultSet.getString("Sujet"));
            reclamation.setContenu(resultSet.getString("Contenu"));
            reclamation.setEtat(resultSet.getString("Etat"));
            }
        } catch (SQLException r) {
            r.printStackTrace();
        }

        return reclamation;
 
    }
   

}


