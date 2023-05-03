package dao;

import entites.Evenement;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import dao.TicketDao;
import javafx.event.Event;
import javax.activation.DataSource;
import utils.MyDB;
public class EvenementDao {
    private Connection connection;

    public EvenementDao() {
        String url = "jdbc:mysql://localhost:3306/pidev";
        String user = "root";
        String password = "";
        try {
            Class.forName("com.mysql.jdbc.Driver");
            connection = DriverManager.getConnection(url, user, password);
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void addEvenement(Evenement evenement) {
        try {
            PreparedStatement preparedStatement = connection.prepareStatement("INSERT INTO evenement(nom, adresse, photo, nbrplaces, objet, description, dateevent) VALUES (?, ?, ?, ?, ?, ?, ?)");
            preparedStatement.setString(1, evenement.getNom());
            preparedStatement.setString(2, evenement.getAdresse());
            preparedStatement.setString(3, evenement.getPhoto());
            preparedStatement.setInt(4, evenement.getNbrplaces());
            preparedStatement.setString(5, evenement.getObjet());
            preparedStatement.setString(6, evenement.getDescription());
            preparedStatement.setDate(7, evenement.getDateevent());
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void updateEvenement(Evenement evenement) {
        try {
            PreparedStatement preparedStatement = connection.prepareStatement("UPDATE evenement SET nom = ?, adresse = ?, photo = ?, nbrplaces = ?, objet = ?, description = ?, dateevent = ? WHERE id = ?");
            preparedStatement.setString(1, evenement.getNom());
            preparedStatement.setString(2, evenement.getAdresse());
            preparedStatement.setString(3, evenement.getPhoto());
            preparedStatement.setInt(4, evenement.getNbrplaces());
            preparedStatement.setString(5, evenement.getObjet());
            preparedStatement.setString(6, evenement.getDescription());
            preparedStatement.setDate(7, evenement.getDateevent());
            preparedStatement.setInt(8, evenement.getId());
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void deleteEvenementt(int id) {
        try {
            PreparedStatement preparedStatement = connection.prepareStatement("DELETE FROM evenement WHERE id = ?");
            preparedStatement.setInt(1, id);
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public List<Evenement> getAllEvenements() {
        List<Evenement> evenements = new ArrayList<Evenement>();
        try {
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery("SELECT * FROM evenement");
            while (resultSet.next()) {
                Evenement evenement = new Evenement();
                evenement.setId(resultSet.getInt("id"));
                evenement.setNom(resultSet.getString("nom"));
                evenement.setAdresse(resultSet.getString("adresse"));
                evenement.setPhoto(resultSet.getString("photo"));
                evenement.setNbrplaces(resultSet.getInt("nbrplaces"));
                evenement.setObjet(resultSet.getString("objet"));
                evenement.setDescription(resultSet.getString("description"));
                evenement.setDateevent(resultSet.getDate("dateevent"));
                evenements.add(evenement);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return evenements;
    }
public Evenement getEvenementById(int id) {
    Evenement evenement = new Evenement();
    try {
        PreparedStatement preparedStatement = connection.prepareStatement("SELECT * FROM evenement WHERE id = ?");
        preparedStatement.setInt(1, id);
        ResultSet resultSet = preparedStatement.executeQuery();
        if (resultSet.next()) {
            evenement.setId(resultSet.getInt("id"));
            evenement.setNom(resultSet.getString("nom"));
            evenement.setAdresse(resultSet.getString("adresse"));
            evenement.setPhoto(resultSet.getString("photo"));
            evenement.setNbrplaces(resultSet.getInt("nbrplaces"));
            evenement.setObjet(resultSet.getString("objet"));
            evenement.setDescription(resultSet.getString("description"));
            evenement.setDateevent(resultSet.getDate("dateevent"));
        }
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return evenement;
}
 public static Evenement getEvenementByIdd(int id) {
    Evenement evenement = null;
    try {
 Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");   
 PreparedStatement ps = conn.prepareStatement("SELECT * FROM evenement WHERE id = ?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        if (rs.next()) {
            evenement = new Evenement();
            evenement.setId(rs.getInt("id"));
            evenement.setNom(rs.getString("nom"));
            evenement.setDateevent(rs.getDate("dateevent"));
            // Ajouter d'autres propriétés de l'événement si nécessaire
        }
        rs.close();
        ps.close();
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return evenement;
}

   public void deleteEvenement(Evenement evenement) {
    try {
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");  
        // supprimer les tickets associés à l'événement
        String deleteTicketsQuery = "DELETE FROM ticket WHERE evenements_id = ?";
        PreparedStatement deleteTicketsStatement = connection.prepareStatement(deleteTicketsQuery);
        deleteTicketsStatement.setInt(1, evenement.getId());
        deleteTicketsStatement.executeUpdate();
        // supprimer l'événement
        String deleteEvenementQuery = "DELETE FROM evenement WHERE id = ?";
        PreparedStatement deleteEvenementStatement = connection.prepareStatement(deleteEvenementQuery);
        deleteEvenementStatement.setInt(1, evenement.getId());
        deleteEvenementStatement.executeUpdate();
        connection.close();
    } catch (SQLException ex) {
        ex.printStackTrace();
    }
}

public List<Evenement> searchEvenements(String searchText) {
    List<Evenement> evenements = new ArrayList<>();
    try {
        // Connexion à la base de données
        Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
        
        // Requête SQL pour rechercher les événements correspondant au texte de recherche
        String query = "SELECT * FROM evenement WHERE nbrplaces LIKE '%" + searchText + "%' OR description LIKE '%" + searchText + "%'";
        
        // Exécution de la requête
        Statement statement = connection.createStatement();
        ResultSet resultSet = statement.executeQuery(query);
        
        // Parcours des résultats de la requête et création d'objets Evenement correspondants
        while (resultSet.next()) {
            Evenement evenement = new Evenement();
            // evenement.setId(resultSet.getInt("id"));
            evenement.setNom(resultSet.getString("nom"));
            evenement.setAdresse(resultSet.getString("adresse"));
            evenement.setPhoto(resultSet.getString("photo"));
            evenement.setNbrplaces(resultSet.getInt("nbrplaces"));
            evenement.setObjet(resultSet.getString("objet"));
            evenement.setDescription(resultSet.getString("description"));
            evenement.setDateevent(resultSet.getDate("dateevent"));
            evenements.add(evenement);
        }
        
        // Fermeture de la connexion et des ressources associées
        resultSet.close();
        statement.close();
        connection.close();
    } catch (SQLException e) {
        // Gestion des exceptions
        e.printStackTrace();
    }
    return evenements;
}

}


