package gs_rdv;

import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import entites.RendezVous;
import java.io.IOException;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import services.RendezVousService;
import utils.MyDB;

/**
 *
 * @author ASUS
 */
public class Gs_RDV extends Application {

   @Override
    public void start(Stage stage) throws Exception {
        Parent root = FXMLLoader.load(getClass().getResource("/gui/AfficherRDV.fxml"));
    
        Scene scene = new Scene(root);
        
        stage.setScene(scene);
        stage.show();
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
  /*      
 //        MyDB db = new MyDB();
//        MyDB db1 = new MyDB();
     
        MyDB db2 = MyDB.getInstance();
        MyDB db3 = MyDB.getInstance();
        
        Menu p = new Menu("test","java");
        Menu p1 = new Menu("testtt","java");
        EvenementService ps = new EvenementService();
        try {
       //    ps.ajouter(p);
       //    ps.ajouterr(p1);
            System.out.println(ps.afficherListe());
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        */

     launch(args);

    }
   
    
}
