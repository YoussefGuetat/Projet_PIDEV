/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Connection;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author hgygz
 */

    
    public interface ICRUD<T> {
    
    public void ajouter(T p);
   public List<T> afficherListe() throws SQLException ;
   public void modifier(Annonce a,int id);
         public void supprimer(int id, Connection conx) throws SQLException;
    
    
    
}
   

