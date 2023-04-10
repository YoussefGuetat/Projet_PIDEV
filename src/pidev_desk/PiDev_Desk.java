/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev_desk;

import Entities.Utilisateur;
import Services.PasswordHasher;
import Services.UtilisateurServices;
import java.sql.Date;
import java.sql.SQLException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import org.mindrot.jbcrypt.BCrypt;
import utils.MyDB;


/**
 *
 * @author Dell
 */
public class PiDev_Desk {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws SQLException, ParseException {
         MyDB db = MyDB.getInstance();
         System.out.println(db);        
         UtilisateurServices Us = new UtilisateurServices();
        /* Utilisateur p1 = new Utilisateur("guetat","bechir","bechir@gmail.com","1234567","Admin",true);
         if(Us.isEmailUnique(p1.getEmail())){
         Us.signUp(p1);
         }
         else{
         System.out.println("noooooooooooop");
         }*/
             
            Utilisateur p1 = new Utilisateur();
            System.out.println(Us.login("bechir@gmail.com","1234567"));

          /*Utilisateur u = new Utilisateur(55025447,"youssef", "guetat", "hawachi","","Admin",null);
          Us.updateUser(u, 57);
*/
    }
    
}
