/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author Mega-PC
 */
public interface CrudReclamation<Rec> {
    public void ajouter(Rec r);
    public void modifier(Rec r);
    public void supprimer(int id) throws SQLException;
    public List<Reclamation> afficher();
}
