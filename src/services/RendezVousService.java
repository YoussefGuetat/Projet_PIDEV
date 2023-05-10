package services;

import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import entites.RendezVous;
import java.util.Collections;
import java.util.Comparator;
import utils.MyDB;

/**
 * 
 */
public class RendezVousService {
    private Connection conx;

    public RendezVousService() {
        conx = MyDB.getInstance().getConx();
    }

    // Méthode pour ajouter un rendez-vous dans la base de données
    public void ajouterRendezVous(RendezVous rendezVous) {
        try {
            String query = "INSERT INTO rendez_vous ( date_rdv, etat, message, type_lieu) VALUES ( ?, ?, ?, ?)";
            PreparedStatement preparedStatement = conx.prepareStatement(query);
            
            preparedStatement.setDate(1, rendezVous.getDate_rdv());
            preparedStatement.setString(2, rendezVous.getEtat());
            preparedStatement.setString(3, rendezVous.getMessage());
            preparedStatement.setString(4, rendezVous.getType_lieu());
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    // Méthode pour mettre à jour un rendez-vous dans la base de données
    public void mettreAJourRendezVous(RendezVous rendezVous) {
        try {
            String query = "UPDATE rendez_vous SET  date_rdv = ?, etat = ?, message = ?, type_lieu = ? WHERE id = ?";
            PreparedStatement preparedStatement = conx.prepareStatement(query);

            preparedStatement.setDate(1, rendezVous.getDate_rdv());
            preparedStatement.setString(2, rendezVous.getEtat());
            preparedStatement.setString(3, rendezVous.getMessage());
            preparedStatement.setString(4, rendezVous.getType_lieu());
            preparedStatement.setInt(5, rendezVous.getId());
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    // Méthode pour supprimer un rendez-vous de la base de données
    public void supprimerRendezVous(int id) {
        try {
            String query = "DELETE FROM rendez_vous WHERE id = ?";
            PreparedStatement preparedStatement = conx.prepareStatement(query);
            preparedStatement.setInt(1, id);
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    // Méthode pour récupérer tous les rendez-vous de la base de données
    public List<RendezVous> getAllRendezVous() {
        List<RendezVous> rendezVousList = new ArrayList<>();
        try {
            String query = "SELECT * FROM rendez_vous";
            PreparedStatement preparedStatement = conx.prepareStatement(query);
            ResultSet resultSet = preparedStatement.executeQuery();
            while (resultSet.next()) {
                int id = resultSet.getInt("id");

                Date date_rdv = resultSet.getDate("date_rdv");
                String etat = resultSet.getString("etat");
                String message = resultSet.getString("message");
                String type_lieu = resultSet.getString("type_lieu");
                RendezVous rendezVous = new RendezVous(id, date_rdv, etat, message, type_lieu);
                rendezVousList.add(rendezVous);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return rendezVousList;
    }

    // Méthode pour récupérer un rendez-vous par son identifiant
   public RendezVous getRendezVousById(int id) {
        RendezVous rendezVous = null;
        try {
            String query = "SELECT * FROM rendez_vous WHERE id = ?";
            PreparedStatement preparedStatement = conx.prepareStatement(query);
            preparedStatement.setInt(1, id);
            ResultSet resultSet = preparedStatement.executeQuery();
            if (resultSet.next()) {

                Date date_rdv = resultSet.getDate("date_rdv");
                String etat = resultSet.getString("etat");
                String message = resultSet.getString("message");
                String type_lieu = resultSet.getString("type_lieu");
                rendezVous = new RendezVous(id, date_rdv, etat, message, type_lieu);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return rendezVous;
    }

    
}

