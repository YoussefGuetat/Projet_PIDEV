/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Annonce;
import Entities.Annonce.Bmc;
import Service.BmcService;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.FileChooser;
import javax.swing.text.Document;

import java.io.FileNotFoundException;

import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableRow;
import javafx.stage.Stage;



/**
 * FXML Controller class
 *
 * @author hgygz
 */
public class DisplayBmcController implements Initializable {
    
      @FXML
    private TableView<Bmc> BmcTable;
  @FXML
    private TableColumn<Bmc, String> pcles;

    @FXML
    private TableColumn<Bmc, String> actcles;

    @FXML
    private TableColumn<Bmc, String> rscles;

    @FXML
    private TableColumn<Bmc, String> propval;

    @FXML
    private TableColumn<Bmc, String> rltsclts;

    @FXML
    private TableColumn<Bmc, String> canaux;

    @FXML
    private TableColumn<Bmc, String> segmarche;

    @FXML
    private TableColumn<Bmc,Double> couts;

    @FXML
    private TableColumn<Bmc, Double> revenus;
    
    
    
   

    private Bmc bmc;
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
  BmcService bmcService = new BmcService();

pcles.setCellValueFactory(new PropertyValueFactory<>("partenairesCles"));
actcles.setCellValueFactory(new PropertyValueFactory<>("activitesCles"));
rscles.setCellValueFactory(new PropertyValueFactory<>("ressourcesCles"));
propval.setCellValueFactory(new PropertyValueFactory<>("propositionValeur"));
rltsclts.setCellValueFactory(new PropertyValueFactory<>("relationsClients"));
canaux.setCellValueFactory(new PropertyValueFactory<>("canaux"));
segmarche.setCellValueFactory(new PropertyValueFactory<>("segmentsMarche"));
couts.setCellValueFactory(new PropertyValueFactory<>("couts"));
revenus.setCellValueFactory(new PropertyValueFactory<>("revenus"));
         









// Load the BMC data from the database and add it to the table
 try {
        Annonce annonce = new Annonce(); // create an instance of Annonce
        Bmc bmc = bmcService.getBmcByAnnonceId(annonce.getId());
        if (bmc != null) {
            BmcTable.getItems().add(bmc);
        }
        BmcTable.setEditable(false);
    } catch (SQLException e) {
        // handle the exception
    }
}


public void setBmc(Bmc bmc) {
        this.bmc = bmc;
        populateBmcTable();
    }

    private void populateBmcTable() {
        pcles.setCellValueFactory(new PropertyValueFactory<>("partenaires_cles"));
        actcles.setCellValueFactory(new PropertyValueFactory<>("activites_cles"));
        rscles.setCellValueFactory(new PropertyValueFactory<>("ressources_cles"));
        propval.setCellValueFactory(new PropertyValueFactory<>("proposition_valeur"));
        rltsclts.setCellValueFactory(new PropertyValueFactory<>("relations_clients"));
        canaux.setCellValueFactory(new PropertyValueFactory<>("canaux"));
        segmarche.setCellValueFactory(new PropertyValueFactory<>("segments_marche"));
        couts.setCellValueFactory(new PropertyValueFactory<>("couts"));
        revenus.setCellValueFactory(new PropertyValueFactory<>("revenus"));

        
        
         if (bmc != null) {
        BmcTable.getItems().add(bmc);
    }
    }



@FXML
private void exportToPDF() {
    try {
        generatePdf();
    } catch (FileNotFoundException | DocumentException e) {
        e.printStackTrace();
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("PDF Export Error");
        alert.setHeaderText("Error exporting to PDF");
        alert.setContentText("An error occurred while exporting the BMC table to PDF. Please try again.");
        alert.showAndWait();
    }
}

@FXML
private void generatePdf() throws FileNotFoundException, DocumentException {
    FileChooser fileChooser = new FileChooser();
    fileChooser.getExtensionFilters().addAll(new FileChooser.ExtensionFilter("PDF Files", "*.pdf"));
    File selectedFile = fileChooser.showSaveDialog(null);
    if (selectedFile != null) {
        // create a new PDF document
        com.itextpdf.text.Document document = new com.itextpdf.text.Document();
        PdfWriter.getInstance(document, new FileOutputStream(selectedFile));

        document.open();

        PdfPTable table = new PdfPTable(9);

        PdfPCell pclesCell = new PdfPCell(new Phrase("Partenaires clés"));
        PdfPCell actclesCell = new PdfPCell(new Phrase("Activités clés"));
        PdfPCell rsclesCell = new PdfPCell(new Phrase("Ressources clés"));
        PdfPCell propvalCell = new PdfPCell(new Phrase("Proposition de valeur"));
        PdfPCell rltscltsCell = new PdfPCell(new Phrase("Relations clients"));
        PdfPCell canauxCell = new PdfPCell(new Phrase("Canaux"));
        PdfPCell segmarcheCell = new PdfPCell(new Phrase("Segments de marché"));
        PdfPCell coutsCell = new PdfPCell(new Phrase("Coûts"));
        PdfPCell revenusCell = new PdfPCell(new Phrase("Revenus"));

        table.addCell(pclesCell);
        table.addCell(actclesCell);
        table.addCell(rsclesCell);
        table.addCell(propvalCell);
        table.addCell(rltscltsCell);
        table.addCell(canauxCell);
        table.addCell(segmarcheCell);
        table.addCell(coutsCell);
        table.addCell(revenusCell);

        for (Bmc bmc : BmcTable.getItems()) {
            table.addCell(bmc.getPartenaires_cles());
            table.addCell(bmc.getActivites_cles());
            table.addCell(bmc.getRessources_cles());
            table.addCell(bmc.getProposition_valeur());
            table.addCell(bmc.getRelations_clients());
            table.addCell(bmc.getCanaux());
            table.addCell(bmc.getSegments_marche());
            table.addCell(String.valueOf(bmc.getCouts()));
            table.addCell(String.valueOf(bmc.getRevenus()));
        }

        document.add(table);
        document.close();

        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("PDF Export");
        alert.setHeaderText("Export successful");
        alert.setContentText("The BMC has been exported to PDF successfully.");
        alert.showAndWait();
    }
}




@FXML
void addback(ActionEvent event){
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
    

