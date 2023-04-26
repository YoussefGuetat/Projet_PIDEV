/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev_desk;

import Entities.Utilisateur;
import Services.PasswordHasher;
import Services.UtilisateurServices;
import java.io.IOException;
import java.sql.Date;
import java.sql.SQLException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import org.mindrot.jbcrypt.BCrypt;
import utils.MyDB;
import java.net.URI;
import java.net.URISyntaxException;
import java.util.Scanner;

/**
 *
 * @author Dell
 */

public class PiDev_Desk {

    /**
     * @param args the command line arguments
     */
        private static Object waitLock = new Object();

    
    public static void main(String[] args) throws SQLException, ParseException, IOException {
     /*  MyDB db = MyDB.getInstance();
         System.out.println(db);        
         UtilisateurServices Us = new UtilisateurServices();*/
        /* Utilisateur p1 = new Utilisateur("guetat","bechir","bechir@gmail.com","1234567","Admin",true);
         if(Us.isEmailUnique(p1.getEmail())){
         Us.signUp(p1);
         }
         else{
         System.out.println("noooooooooooop");
         }*/
             
        //    Utilisateur p1 = new Utilisateur();
          //  System.out.println(Us.updateToken("stella@gmail.com","1234567"));
 /* int id = Us.isTokenExist("277239") ;
        if ( id  != 0)
        {
          System.out.println(id);
        }
        else{
            System.out.println("leee");*/
       // }
          /*Utilisateur u = new Utilisateur(55025447,"youssef", "guetat", "hawachi","","Admin",null);
          Us.updateUser(u, 57);
*/

    }
    
}
