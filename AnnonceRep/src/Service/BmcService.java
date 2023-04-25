/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.Annonce;
import Entities.Annonce.Bmc;
import Entities.BmcCrud;
import Entities.ICRUD;
import Utils.MyDB;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author hgygz
 */
public class BmcService implements BmcCrud<Bmc> {
    
    
    
    public Connection conx;
    public Statement stm;

    public BmcService() {
        conx = MyDB.getInstance().getConx();

    }
 public void ajouterBmc(Annonce.Bmc bmc, int annonce_id) {
    try {
        String query = "INSERT INTO bmc(partenaires_cles, activites_cles, ressources_cles, proposition_valeur, relations_client, canaux, segments_marche, couts, revenus, annonce_id) VALUES(?,?,?,?,?,?,?,?,?,?)";
        PreparedStatement pst = conx.prepareStatement(query);
        pst.setString(1, bmc.getPartenaires_cles());
        pst.setString(2, bmc.getActivites_cles());
        pst.setString(3, bmc.getRessources_cles());
        pst.setString(4, bmc.getProposition_valeur());
        pst.setString(5, bmc.getRelations_clients());
        pst.setString(6, bmc.getCanaux());
        pst.setString(7, bmc.getSegments_marche());
        pst.setDouble(8, bmc.getCouts());
        pst.setDouble(9, bmc.getRevenus());
        pst.setInt(10, annonce_id);
        pst.executeUpdate();
        System.out.println("Bmc added successfully to the database!");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
}
 
 
 
 
 
 public Bmc getBmcByAnnonceId(int annonceId) throws SQLException {
    String req = "SELECT * FROM `Bmc` WHERE `annonce_id` = ?";
    PreparedStatement ps = conx.prepareStatement(req);
    ps.setInt(1, annonceId);
    ResultSet rs = ps.executeQuery();
    Bmc bmc = null;
    if (rs.next()) {
        int id = rs.getInt(2);
        String partenaires_cles = rs.getString(3);
        String activites_cles = rs.getString(4);
        String ressources_cles = rs.getString(5);
        String proposition_valeur = rs.getString(6);
        String relations_clients = rs.getString(7);
        String canaux = rs.getString(8);
        String segments_marche = rs.getString(9);
        double couts = rs.getDouble(10);
        double revenus = rs.getDouble(11);
        
        Annonce annonce = new Annonce(); // create an instance of Annonce
        bmc = annonce.new Bmc(id,partenaires_cles, activites_cles, ressources_cles, proposition_valeur, relations_clients, canaux, segments_marche, couts, revenus); // use the instance of Annonce to create an instance of Bmc
    }
    
    
    return bmc;
}


}
