package com.annonce.gui.annonce;

import com.annonce.entities.annonce;
import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.eshop.services.AnnonceService;




public class Manage extends Form {
     Form previous; 
     //add  GUI
    public Manage (Form previous) {        
            super("Ajouter transaction", new BoxLayout(BoxLayout.Y_AXIS));           
             super.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
      
           
            TextField titre = new TextField("", "titre");
            TextField description = new TextField("", "description");
            
            
            
            
        
        Button btnValider = new Button("Add ");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Form f2 = new Form(BoxLayout.y());
                Label ltitre=new Label("titre: "+titre.getText());
                Label ldescription=new Label("description: "+description.getText());
                
                
                f2.add(ltitre);
                f2.add(ldescription);
                              
                f2.show();
                if ((titre.getText().length()==0)&&(description.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else{ 
                             annonce t = new annonce(titre.getText(),description.getText());
                            if( AnnonceService.getInstance().addTask(t))
                            {
                               Dialog.show("Success","Transaction added",new Command("OK"));
                               new ShowAll(previous).show();
                            }else
                                Dialog.show("ERROR", "Server error", new Command("OK"));
                    }
                Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                return;


                 
            }
        });
        
        addAll(titre, description, btnValider);
//      getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
                
    }
    
    
    
    
}