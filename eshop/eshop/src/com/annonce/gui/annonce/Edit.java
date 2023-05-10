package com.annonce.gui.annonce;

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.annonce.entities.annonce;
import com.eshop.services.AnnonceService;

public class Edit  extends Form {
    
    //Modif
      Form previous; 
    public Edit (Form previous, annonce r ) {
        
            super("Modifier transaction", new BoxLayout(BoxLayout.Y_AXIS));           
            super.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
      
            TextField titre = new TextField(r.getTitre(), "titre");
            TextField description = new TextField(r.getDescription(), "description");          
            
        
         Button btnModifier = new Button("Edit");
         Button btnAnnuler = new Button("Annuler");
         btnModifier.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Form f2 = new Form(BoxLayout.y());
                Label ltitre=new Label("titre: "+titre.getText());
                Label ldescription=new Label("description: "+description.getText());
                
                f2.add(ltitre);
                f2.add(ldescription);
                                        
                f2.show();
                      
              r.setTitre(titre.getText());
              r.setDescription(description.getText()); 
              
              
     
             /* if(annonceService.getInstance().modifier(r)) { 
                new ShowAll(previous).show();
              } */
             
             
             try {
            if(AnnonceService.getInstance().modifier(r)) { 
                new ShowAll(previous).show();
            } else {
                Dialog.show("Error", "Unable to update transaction", new Command("OK"));
            }
        } catch(Exception e) {
            Dialog.show("Error", "Unable to update transaction: " + e.getMessage(), new Command("OK"));
        }     
             
            }
        });
        addAll(titre,description,btnAnnuler,btnModifier);
      //  getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
       
         btnAnnuler.addActionListener(e -> {
           new ShowAll(previous).show();
         });
    }
  
}
