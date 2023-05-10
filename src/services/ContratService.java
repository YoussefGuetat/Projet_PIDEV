package services;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import entites.Contrat;
import entites.RendezVous;
import java.io.File;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.Optional;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import static org.eclipse.persistence.config.TargetDatabase.Database;
import utils.MyDB;

/**
 */
public class ContratService {

    

    public static List<RendezVous> getAllContrat() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    private Connection conx;

    public ContratService() {
        // Initialiser la connexion à la base de données
        conx = MyDB.getInstance().getConx();
    }

    /**
     * Ajoute un nouveau contrat dans la base de données.
     *
     * @param contrat Le contrat à ajouter
     * @return true si l'ajout réussit, false sinon
     */
    public boolean ajouterContrat(Contrat contrat) {
    String sql = "INSERT INTO contrat (date_contart, duree_contrat, image, taux_profit) VALUES (?, ?, ?, ?)";
    try (PreparedStatement statement = conx.prepareStatement(sql)) {
        statement.setString(1, contrat.getDate_contrat());
        statement.setInt(2, contrat.getDuree_contrat());
        statement.setString(3, contrat.getImage());
        statement.setFloat(4, contrat.getTaux_profit());

        int rowsAffected = statement.executeUpdate();
        return rowsAffected > 0;
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return false;
}


    /**
     * Récupère la liste de tous les contrats dans la base de données.
     *
     * @return La liste des contrats
     */
    public List<Contrat> listerContrats() throws SQLException {
    List<Contrat> contrats = new ArrayList<>();
    String sql = "SELECT * FROM contrat";
    PreparedStatement statement = conx.prepareStatement(sql);
        ResultSet resultSet = statement.executeQuery();
        while (resultSet.next()) {
            int id = resultSet.getInt("id");
            java.sql.Date date_contrat = resultSet.getDate("date_contart");
            int duree_contrat = resultSet.getInt("duree_contrat");
            String image = resultSet.getString("image");
            float taux_profit = resultSet.getFloat("taux_profit");

            Contrat contrat = new Contrat(date_contrat.toString(), duree_contrat, image, taux_profit);
            contrats.add(contrat);
        }
    
    return contrats;
}

    public Integer[] getAllRendezVousId() {
    Connection conx = null;
    PreparedStatement ps = null;
    ResultSet rs = null;

    try {
        // Créer une connexion à la base de données
        conx = MyDB.getInstance().getConx();
        
        // Préparer la requête SQL
        String query = "SELECT id_rendez_vous FROM rendez_vous";
        ps = conx.prepareStatement(query);
        
        // Exécuter la requête SQL et récupérer les résultats
        rs = ps.executeQuery();
        
        // Initialiser une liste pour stocker les IDs de rendez-vous
        List<Integer> ids = new ArrayList<>();
        
        // Parcourir les résultats et ajouter chaque ID de rendez-vous à la liste
        while (rs.next()) {
            int id = rs.getInt("id_rendez_vous");
            ids.add(id);
        }
        
        // Convertir la liste en tableau d'entiers et retourner le résultat
        return ids.toArray(new Integer[0]);
    } catch (SQLException ex) {
        ex.printStackTrace();
        return null;
    } finally {
        // Fermer la connexion, le statement et le resultset
        MyDB.getInstance().close(conx, ps, rs);
    }
}
    

    public void supprimerContrat(int id) {
        try {
            String query = "DELETE FROM contrat WHERE id = ?";
            PreparedStatement preparedStatement = conx.prepareStatement(query);
            preparedStatement.setInt(1, id);
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
    
    
    

    private void loadContratData() {
    String sql = "SELECT * FROM contrat";
    try (Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/mydatabase", "username", "password");
         Statement stmt = conn.createStatement();
         ResultSet rs = stmt.executeQuery(sql)) {
        
        while (rs.next()) {
            Contrat contrat = new Contrat();
            contrat.setId(rs.getInt("id"));
            contrat.setDate_contrat(rs.getString("date_contrat"));
            contrat.setDuree_contrat(rs.getInt("duree_contrat"));
            contrat.setImage(rs.getString("image"));
            contrat.setTaux_profit(rs.getFloat("taux_profit"));
            Contrat.add(contrat);
        }
    } catch (SQLException e) {
        System.err.println("Error loading contrat data: " + e.getMessage());
    }
}

    
    public void modifierContrat(Contrat contrat) {
        try {
            String query = "UPDATE contrat SET   duree_contrat = ?, image = ?, taux_profit = ? WHERE id = ?";
            PreparedStatement preparedStatement = conx.prepareStatement(query);

            preparedStatement.setInt(1, contrat.getDuree_contrat());
            preparedStatement.setString(2, contrat.getImage());
            preparedStatement.setFloat(3, contrat.getTaux_profit());
            preparedStatement.setInt(4, contrat.getId());
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    

    

    


    

    



}
