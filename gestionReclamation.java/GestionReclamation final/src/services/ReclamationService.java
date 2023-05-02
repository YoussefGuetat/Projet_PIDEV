/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.CrudReclamation;
import entities.Reclamation;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;
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
    public void modifier(Reclamation r) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void supprimer(int id) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Reclamation> afficher() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
