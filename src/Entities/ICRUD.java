/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author Dell
 */
public interface ICRUD<T> {
    
    //public void ajouter(T p);
    //public void ajouterr(T p);
    //public List<T> afficherListe() throws SQLException ;
    public Utilisateur getUserByEmail(String email) throws SQLException;
    public Utilisateur login(String email,String pass) throws SQLException;
    public boolean isEmailUnique(String email);
    public void signUp(T u) throws SQLException ;
    public boolean updateUser(T u,int id);
    public List<T> afficherListe() throws SQLException;
    
}
