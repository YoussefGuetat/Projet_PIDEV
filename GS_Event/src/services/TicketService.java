package services;

import entites.Evenement;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import entites.Ticket;
import java.sql.ResultSet;
import java.sql.Timestamp;
import utils.MyDB;

public class TicketService {

    private Connection conx;

    public TicketService() {
        conx = MyDB.getInstance().getConx();
    }

    public boolean ajouterTicket(Ticket t) {
        String req = "INSERT INTO Ticket (reference, nbrplace, date_reservation, evenements_id) VALUES (?, ?, ?, ?)";
        try {
            PreparedStatement pst = conx.prepareStatement(req);
            pst.setString(1, t.getReference());
            pst.setInt(2, t.getNbrplace());
            pst.setTimestamp(3, t.getDate_reservation());
            pst.setInt(4, t.getEvenement().getId());
            int result = pst.executeUpdate();
            return result > 0;
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
            return false;
        }
    }

    
 public Ticket getTicketById(int id) {
    String req = "SELECT * FROM ticket WHERE id=?";
    try {
        PreparedStatement pst = conx.prepareStatement(req);
        pst.setInt(1, id);
        ResultSet rs = pst.executeQuery();
        if (rs.next()) {
            String reference = rs.getString("reference");
            int nbrplace = rs.getInt("nbrplace");
            Timestamp date_reservation = rs.getTimestamp("date_reservation");
            Ticket ticket = new Ticket(id, reference, nbrplace, date_reservation);
            return ticket;
        }
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
    return null;
}

public boolean supprimerTicket(int id) {
    String req = "DELETE FROM ticket WHERE id=?";
    try {
        PreparedStatement pst = conx.prepareStatement(req);
        pst.setInt(1, id);
        int result = pst.executeUpdate();
        return result > 0;
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
        return false;
    }
}



}
