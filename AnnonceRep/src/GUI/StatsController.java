/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Utils.MyDB;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author hgygz
 */
public class StatsController implements Initializable {

    @FXML
    private PieChart chartpie;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
      MyDB myDB = MyDB.getInstance();
    Connection conx = myDB.getConx();

    // Define SQL query to fetch data from database
    String sql = "SELECT domaine, COUNT(*) as count FROM annonce GROUP BY domaine";
    try {
        Statement stmt = conx.createStatement();
        ResultSet rs = stmt.executeQuery(sql);

        List<PieChart.Data> pieChartData = new ArrayList<>();
        int total = 0;

        while (rs.next()) {
            String domaine = rs.getString("domaine");
            int count = rs.getInt("count");
            total += count;
            PieChart.Data data = new PieChart.Data(domaine + " (" + count + ")", count);
            pieChartData.add(data);
        }

        for (PieChart.Data data : pieChartData) {
            double percentage = (data.getPieValue() / total) * 100;
            data.setName(data.getName() + " - " + String.format("%.2f", percentage) + "%");
        }

        chartpie.setData(FXCollections.observableArrayList(pieChartData));

    } catch (SQLException e) {
        e.printStackTrace();
    }  
    
    }



private Scene previousScene;
@FXML
void goBack(ActionEvent event) {
    try {
        // Load stats.fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("AffichageFront.fxml"));
        Parent root = loader.load();
        Scene scene = new Scene(root);

        // Get the current window
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();

        // Set the scene in the current window
        stage.setScene(scene);

    } catch (IOException e) {
        e.printStackTrace();
    }
}
}
