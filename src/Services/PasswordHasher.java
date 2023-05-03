/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import java.security.SecureRandom;
import java.util.Base64;
import org.mindrot.jbcrypt.BCrypt;


/**
 *
 * @author Dell
 */
public class PasswordHasher {
public static String hashPassword(String password) {

    return BCrypt.hashpw(password, BCrypt.gensalt());

}
    
    public static boolean checkPassword(String password, String hashedPassword) {
        return (BCrypt.checkpw(password, hashedPassword.replace("$2y$", "$2a$")));
    }

}
