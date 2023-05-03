package services;

import entites.Icrud;
import entites.Evenement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import utils.MyDB;

public class EvenementService implements Icrud<Evenement> {

    public Connection conx;
    public Statement stm;

    public EvenementService() {
        conx = MyDB.getInstance().getConx();
    }

    @Override
    public void ajouter(Evenement e) {
        String req = "INSERT INTO `evenement`(`nom`, `adresse`, `photo`,`nbrplaces`,`objet`,`description`,`dateevent`) VALUES ('" + e.getNom() + "','" + e.getAdresse() + "','" + e.getPhoto() + "','" + e.getNbrplaces() + "','" + e.getObjet() + "','" + e.getDescription() + "','" + e.getDateevent() + "')";
        try {
            stm = conx.createStatement();
            stm.executeUpdate(req);
            System.out.println("Evenement est bien ajouté");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void ajouterr(Evenement e) {
        String req = "INSERT INTO `evenement`(`nom`, `adresse`, `photo`,`nbrplaces`,`objet`,`description`,`dateevent`) "
                + "VALUES (?,?,?,?,?,?,?)";
        try {

            PreparedStatement ps = conx.prepareStatement(req);
            ps.setString(1, e.getNom());
            ps.setString(2, e.getAdresse());
            ps.setString(3, e.getPhoto());
            ps.setInt(4, e.getNbrplaces());
            ps.setString(5, e.getObjet());
            ps.setString(6, e.getDescription());
            ps.setDate(7, e.getDateevent());
            ps.executeUpdate();
            System.out.println("Evenement ajouté");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<Evenement> afficherListe() throws SQLException {
        String req = "SELECT * FROM `evenement`";
        stm = conx.createStatement();
        ResultSet rs = stm.executeQuery(req);
        List<Evenement> evenements = new ArrayList<Evenement>();
        while (rs.next()) {
            Evenement e = new Evenement(rs.getInt("id"),
                    rs.getString("nom"),
                    rs.getString("asresse"),
                    rs.getString("photo"),
                    rs.getInt("nbrplaces"),
                    rs.getString("objet"),
                    rs.getString("description"),
                    rs.getDate("dateevent"));
            evenements.add(e);
        }

        return evenements;
    }
    public List<Evenement> getAllEvenements() throws SQLException {
        List<Evenement> evenements = new ArrayList<>();
        Connection con = MyDB.getInstance().getConx();
        PreparedStatement ps = con.prepareStatement("SELECT * FROM evenement");
        ResultSet rs = ps.executeQuery();
        while (rs.next()) {
            Evenement evenement = new Evenement(rs.getInt("id"), rs.getString("nom"), rs.getString("description"), rs.getDate("date_debut").toLocalDate(),
                    rs.getDate("date_fin").toLocalDate(), rs.getString("lieu"), rs.getInt("nb_places"));
            evenements.add(evenement);
        }
        return evenements;
    }
    @Override
    public void supprimer(int id) {
        try {
            String req = "DELETE FROM evenement WHERE id = " + id;
            Statement st = conx.createStatement();
            st.executeUpdate(req);
            System.out.println("Evenement supprimé !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(Evenement e) {
        try {
            String req = "UPDATE evenement SET nom = '" + e.getNom() + "', adresse = '" + e.getAdresse() + "', photo = '" + e.getPhoto() + "', nbrplaces = '" + e.getNbrplaces() + "' , objet = '" + e.getObjet() + "' , description = '" + e.getDescription() + "' , dateevent = '" + e.getDateevent() + "'  WHERE evenement.id = " + e.getId();
            Statement st = conx.createStatement();
            st.executeUpdate(req);
            System.out.println("Evenement mis à jour !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public boolean ajouterEvenement(Evenement evenement) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   public List<Evenement> getAllEvenement() {
    List<Evenement> evenements = new ArrayList<>();
    try {
        Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
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
        connection.close();
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return evenements;
}
    public Evenement getEvenementById(int id) {
        Connection conn = MyDB.getInstance().getConx();
        Evenement evenement = null;

        try {
            String query = "SELECT * FROM Evenement WHERE id = ?";
            PreparedStatement statement = conn.prepareStatement(query);
            statement.setInt(1, id);

            ResultSet resultSet = statement.executeQuery();

            if (resultSet.next()) {
                evenement = new Evenement();
                evenement.setId(resultSet.getInt("id"));
                evenement.setNom(resultSet.getString("nom"));
                evenement.setDescription(resultSet.getString("description"));
                evenement.setAdresse(resultSet.getString("lieu"));
                evenement.setDateevent(resultSet.getDate("date"));
                evenement.setPhoto(resultSet.getString("photo"));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }

        return evenement;
 
    }
   

}

