package gui;

import dao.TicketDao;
import entites.Ticket;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import java.sql.SQLException;
import org.jfree.chart.ChartFactory;
import org.jfree.chart.ChartFrame;
import org.jfree.chart.JFreeChart;
import org.jfree.chart.plot.PlotOrientation;
import org.jfree.data.category.DefaultCategoryDataset;


public class FXML_AffichierTicketController implements Initializable {

    @FXML
    private TableView<Ticket> tableTickets;

    @FXML
    private TableColumn<Ticket, String> colReference;

   
    @FXML
    private TableColumn<Ticket, String> colDate;

    @FXML
    private TableColumn<Ticket, Integer> colNbrPlaces;
    @FXML
    private TableColumn<Ticket, Void> colSupprimer;
    @FXML
    private TableColumn<Ticket, Void> btnStatistiques;


    private TicketDao ticketDao;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ticketDao = new TicketDao();
        initializeColumns();
        afficherTickets();

    }

    private void initializeColumns() {
        colReference.setCellValueFactory(new PropertyValueFactory<>("reference"));
        colDate.setCellValueFactory(new PropertyValueFactory<>("date_reservation"));
        colNbrPlaces.setCellValueFactory(new PropertyValueFactory<>("nbrplace"));
   
    }

    private void afficherTickets() {
        List<Ticket> listeTickets = ticketDao.getListeTickets();
        tableTickets.getItems().addAll(listeTickets);
    }
 @FXML
private void handleSupprimerButtonAction(ActionEvent event) {
    // Récupérer l'objet sélectionné
    Ticket ticketSelectionne = tableTickets.getSelectionModel().getSelectedItem();
    if (ticketSelectionne == null) {
        // Afficher un message d'erreur si aucun ticket n'est sélectionné
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner un ticket à supprimer");
        alert.showAndWait();
        return;
    }

    // Demander confirmation avant de supprimer le ticket
    Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
    alert.setTitle("Confirmation");
    alert.setHeaderText(null);
    alert.setContentText("Êtes-vous sûr de vouloir supprimer le ticket ?");
    Optional<ButtonType> result = alert.showAndWait();
    if (result.get() == ButtonType.OK) {
        // Supprimer le ticket de la base de données
        try {
            // Récupérer une connexion à la base de données
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");

            // Préparer une requête de suppression
            String sql = "DELETE FROM ticket WHERE id = ?";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setInt(1, ticketSelectionne.getId());

            // Exécuter la requête
            int rowsDeleted = stmt.executeUpdate();
            if (rowsDeleted == 1) {
                // Si un seul enregistrement a été supprimé, afficher un message de succès
                Alert successAlert = new Alert(Alert.AlertType.INFORMATION);
                successAlert.setTitle("Succès");
                successAlert.setHeaderText(null);
                successAlert.setContentText("Le ticket a été supprimé avec succès");
                successAlert.showAndWait();

                // Actualiser la table des tickets
                tableTickets.getItems().remove(ticketSelectionne);
            } else {
                // Si aucun ou plusieurs enregistrements ont été supprimés, afficher un message d'erreur
                Alert errorAlert = new Alert(Alert.AlertType.ERROR);
                errorAlert.setTitle("Erreur");
                errorAlert.setHeaderText(null);
                errorAlert.setContentText("Une erreur est survenue lors de la suppression du ticket");
                errorAlert.showAndWait();
            }

            // Fermer la connexion à la base de données
            conn.close();
        } catch (SQLException ex) {
            // En cas d'erreur, afficher un message d'erreur
            Alert errorAlert = new Alert(Alert.AlertType.ERROR);
            errorAlert.setTitle("Erreur");
            errorAlert.setHeaderText(null);
            errorAlert.setContentText("Une erreur est survenue lors de la suppression du ticket : " + ex.getMessage());
            errorAlert.showAndWait();
        }
    } else {
        // Ne rien faire si l'utilisateur annule la suppression
        return;
    }
}
@FXML
private void afficherStatistiques(ActionEvent event) {
    try {
        // Récupérer une connexion à la base de données
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");

        // Préparer une requête pour récupérer le nombre de tickets pour chaque événement
        String sql = "SELECT evenement.nom, COUNT(ticket.id) AS nbr_tickets FROM evenement LEFT JOIN ticket ON evenement.id = ticket.evenements_id GROUP BY evenement.nom";
        PreparedStatement stmt = conn.prepareStatement(sql);

        // Exécuter la requête
        ResultSet rs = stmt.executeQuery();

        // Créer un dataset pour le graphique
        DefaultCategoryDataset dataset = new DefaultCategoryDataset();
        while (rs.next()) {
            String evenement = rs.getString("nom");
            int nbrTickets = rs.getInt("nbr_tickets");
            dataset.setValue(nbrTickets, "Nombre de tickets", evenement);
        }

        // Créer le graphique
        JFreeChart chart = ChartFactory.createBarChart("Statistiques des Tickets par rapport aux Événements ", "Événements", "Nombre de tickets", dataset, PlotOrientation.VERTICAL, false, true, false);

        // Afficher le graphique dans une fenêtre
        ChartFrame frame = new ChartFrame("Statistiques", chart);
        frame.setVisible(true);
        frame.setSize(800, 600);

        // Fermer la connexion à la base de données
        conn.close();
    } catch (SQLException ex) {
        // En cas d'erreur, afficher un message d'erreur
        Alert errorAlert = new Alert(Alert.AlertType.ERROR);
        errorAlert.setTitle("Erreur");
        errorAlert.setHeaderText(null);
        errorAlert.setContentText("Une erreur est survenue lors de la récupération des statistiques : " + ex.getMessage());
        errorAlert.showAndWait();
    }
}
@FXML
private void afficherStatistiquess(ActionEvent event) {
    try {
        // Récupérer une connexion à la base de données
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");

        // Préparer une requête pour récupérer le nombre de tickets pour chaque événement
        String sql = "SELECT evenement.nom, COUNT(ticket.id) AS nbr_tickets FROM evenement LEFT JOIN ticket ON evenement.id = ticket.evenements_id GROUP BY evenement.nom";
        PreparedStatement stmt = conn.prepareStatement(sql);

        // Exécuter la requête
        ResultSet rs = stmt.executeQuery();

        // Afficher les résultats dans une boîte de dialogue
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Statistiques des Tickets");
        alert.setHeaderText(null);
        StringBuilder sb = new StringBuilder();
        sb.append("Nombre de tickets par événement:\n\n");
        while (rs.next()) {
            sb.append(rs.getString("nom")).append(": ").append(rs.getInt("nbr_tickets")).append("\n");
        }
        alert.setContentText(sb.toString());
        alert.showAndWait();

        // Fermer la connexion à la base de données
        conn.close();
    } catch (SQLException ex) {
        // En cas d'erreur, afficher un message d'erreur
        Alert errorAlert = new Alert(Alert.AlertType.ERROR);
        errorAlert.setTitle("Erreur");
        errorAlert.setHeaderText(null);
        errorAlert.setContentText("Une erreur est survenue lors de la récupération des statistiques : " + ex.getMessage());
        errorAlert.showAndWait();
    }
}

}

