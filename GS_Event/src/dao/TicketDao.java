/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfWriter;
import entites.Evenement;
import dao.EvenementDao;
import entites.Ticket;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.List;
import utils.MyDB;
/**
 *
 * @author ASUS
 */
public class TicketDao {
    public void ajouterTicket(int id_utilisateur, int evenements_id, int nbrplace) {
    // Obtention de l'evenement correspondant à l'id_evenement
    Evenement evenement = EvenementDao.getEvenementByIdd(evenements_id);
    
    // Création d'un nouveau ticket avec les informations fournies
    Ticket ticket = new Ticket();
    ticket.setUtilisateur_id(id_utilisateur);
    ticket.setEvenement(evenement);
    ticket.setNbrplace(nbrplace);
    ticket.setDate_reservation(new Timestamp(System.currentTimeMillis()));
    
    // Génération de la référence unique du ticket
    String reference = evenements_id + "-" + id_utilisateur + "-" + System.currentTimeMillis();
    ticket.setReference(reference);
    
    // Enregistrement du ticket dans la base de données
    try {
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
        PreparedStatement ps = conn.prepareStatement("INSERT INTO ticket (id_utilisateur, evenements_id, reference, date_reservation, nbrplace) VALUES (?, ?, ?, ?, ?)");
        ps.setInt(1, id_utilisateur);
        ps.setInt(2, evenements_id);
        ps.setString(3, reference);
        ps.setTimestamp(4, ticket.getDate_reservation());
        ps.setInt(5, nbrplace);
        ps.executeUpdate();
    } catch (SQLException e) {
        e.printStackTrace();
    }
    
    // Génération du fichier PDF du ticket
    String fileName = "ticket-" + reference + ".pdf";
    try {
        Document document = new Document();
        PdfWriter.getInstance(document, new FileOutputStream(fileName));
        document.open();
        document.add(new Paragraph("Référence : " + reference));
        document.add(new Paragraph("Événement : " + evenement.getNom()));
        document.add(new Paragraph("Date : " + evenement.getDate()));
        document.add(new Paragraph("Nombre de places : " + nbrplace));
        // Ajout de la photo de l'événement (à implémenter)
        document.close();
    } catch (FileNotFoundException | DocumentException e) {
        e.printStackTrace();
    }
}
public List<Ticket> getListeTickets() {
    List<Ticket> listeTickets = new ArrayList<>();
    try {
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
        PreparedStatement ps = conn.prepareStatement("SELECT * FROM ticket");

        ResultSet rs = ps.executeQuery() ;
        while (rs.next()) {
            String reference = rs.getString("reference");
            Timestamp date_reservation = rs.getTimestamp("date_reservation");
            int nbrplace = rs.getInt("nbrplace");
              int id = rs.getInt("id");

            // Récupération de l'événement correspondant
            // Création d'un nouveau ticket avec les informations récupérées
            Ticket ticket = new Ticket();
            ticket.setReference(reference);
            ticket.setDate_reservation(date_reservation);
            ticket.setNbrplace(nbrplace);
            ticket.setId(id);

            // Ajout du ticket à la liste
            listeTickets.add(ticket);
        }
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return listeTickets;
}

public void deleteTicketsByEvenementId(int evenementId) {
    try (Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "");
         PreparedStatement statement = conn.prepareStatement("DELETE FROM ticket WHERE id_evenements = ?")) {
        statement.setInt(1, evenementId);
        statement.executeUpdate();
    } catch (SQLException e) {
        e.printStackTrace();
    }
}
public void supprimerTicket(Ticket ticket) {
    try (Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev", "root", "")) {
        PreparedStatement statement = connection.prepareStatement("DELETE FROM ticket WHERE id = ?");
        statement.setInt(1, ticket.getId());
        statement.executeUpdate();
    } catch (SQLException e) {
        e.printStackTrace();
    }
}

}