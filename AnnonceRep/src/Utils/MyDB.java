/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import javafx.fxml.FXML;

/**
 *
 * @author hgygz
 */
public class MyDB {
    
     final String url="jdbc:mysql://localhost:3306/pidev";
    final String username="root";
    final String pwd="";
    private Connection conx;
    
    public static MyDB instance;
    
    
    public static MyDB getInstance(){
        if (instance == null)
           instance = new MyDB();
        return instance;
        
    }
    private MyDB(){
        
        try {
            conx = DriverManager.getConnection(url, username, pwd);
            System.out.println("Connexion établie");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        
        
    }
    
    public Connection getConx() {
        try {
            if (conx == null || conx.isClosed()) {
                conx = DriverManager.getConnection(url, username, pwd);
                System.out.println("Connexion établie");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return conx;
    }

    public void closeConx() {
        try {
            if (conx != null && !conx.isClosed()) {
                conx.close();
                System.out.println("Connexion fermée");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }


    
}
