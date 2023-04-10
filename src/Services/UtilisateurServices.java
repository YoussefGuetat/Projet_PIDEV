/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.ICRUD;
import Entities.Utilisateur;
import utils.MyDB;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import org.mindrot.jbcrypt.BCrypt;
/**
 *
 * @author Dell
 */
public class UtilisateurServices implements ICRUD<Utilisateur>{
public Connection conx;
    public Statement stm;

    public UtilisateurServices() {
        conx = MyDB.getInstance().getConx();

    }
    @Override
    public Utilisateur login(String email,String pass)throws SQLException {
        Utilisateur user = getUserByEmail(email);
        if (user != null && PasswordHasher.checkPassword(pass, user.getPassword())) {
            return user;
        }
        return null;
    }

    @Override
    public Utilisateur getUserByEmail(String email) throws SQLException {
    String req = "SELECT * FROM `utilisateur` WHERE `email` = ?";
    PreparedStatement pstmt = conx.prepareStatement(req);
    pstmt.setString(1, email);
    ResultSet rs = pstmt.executeQuery();
    if (rs.next()) {
        Utilisateur p = new Utilisateur(rs.getString("email"),
                rs.getString("password"));
        return p;
    } else {
        return null; // no person found with this id
    }
}    

    @Override
    public boolean isEmailUnique(String email) {
         String req = "SELECT COUNT(*) FROM `utilisateur` WHERE `email` = ?";
    try {
        PreparedStatement pstmt = conx.prepareStatement(req);
        pstmt.setString(1, email);
        ResultSet rs = pstmt.executeQuery();
        if (rs.next()) {
            int count = rs.getInt(1);
            return count == 0;
        } else {
            return false;
        }
    } catch (SQLException e) {
        e.printStackTrace();
        return false;
    }
    }

    @Override
    public void signUp(Utilisateur u) throws SQLException {
    String hashPassword = PasswordHasher.hashPassword(u.getPassword());
    String insertSql = "INSERT INTO `utilisateur` (`email`, `password`,`nom`,`prenom`,`role`,`is_actif`,`roles`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    PreparedStatement pstmt = conx.prepareStatement(insertSql);
    pstmt.setString(1, u.getEmail());
    pstmt.setString(2, hashPassword);
    pstmt.setString(3, u.getNom());
    pstmt.setString(4, u.getPrenom());
    pstmt.setString(5, u.getRole());
    pstmt.setBoolean(6, u.isIs_Actif());
     pstmt.setString(7, "  ");
    pstmt.executeUpdate();
    pstmt.close();
    conx.close();
    }

    @Override
    public boolean updateUser(Utilisateur u,int id) {
     
    PreparedStatement pstmt = null;
    int rowsUpdated = 0;
    try {
        String sql = "UPDATE `utilisateur` SET `nom`=?, `prenom`=?, `role`=?, `tel`=?, `adresse`=?, `date_naiss`=?, `description`=? WHERE `id`=?";
        pstmt = conx.prepareStatement(sql);
        pstmt.setString(1, u.getNom());
        pstmt.setString(2, u.getPrenom());
        pstmt.setString(3, u.getRole());
        pstmt.setInt(4, u.getTel());
        pstmt.setString(5, u.getAddresse());
        pstmt.setDate(6, u.getDate_naiss());
        pstmt.setString(7, u.getDescription());
        pstmt.setInt(8, id);
        rowsUpdated = pstmt.executeUpdate();
    } catch (SQLException e) {
        e.printStackTrace();
    } finally {
        try {
            if (pstmt != null) {
                pstmt.close();
            }
            if (conx != null) {
                conx.close();
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
    return rowsUpdated > 0;


    }
        @Override
    public List<Utilisateur> afficherListe() throws SQLException {
        String req = "SELECT * FROM `utilisateur`";
        stm = conx.createStatement();
        ResultSet rs = stm.executeQuery(req);
        List<Utilisateur> users = new ArrayList<Utilisateur>();
        while (rs.next()) {
            Utilisateur p = new Utilisateur(rs.getInt("id"),
                    rs.getInt("tel"),
                    rs.getString("nom"),
                    rs.getString("prenom"),
                    rs.getString("email"),
                    rs.getString("password"),
                    rs.getString("token"),
                    rs.getString("photo"),
                    rs.getString("adresse"),
                    rs.getString("description"),
                    rs.getString("role"),
                    rs.getDate("date_naiss"),
                    rs.getBoolean("is_Actif")
            );
            users.add(p);
        }

        return users;
    }

}
