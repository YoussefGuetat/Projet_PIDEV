package com.annonce.gui.annonce;

import com.codename1.components.*;
import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.*;
import com.annonce.entities.annonce;
import com.eshop.services.AnnonceService;
import java.text.SimpleDateFormat;
import java.util.*;

public class ShowAll extends Form {

    Form previous; 
    
    public static annonce currentannonce = null;
    Button addBtn;

    public ShowAll(Form previous) {
        super("Annonce", new BoxLayout(BoxLayout.Y_AXIS));
        this.previous = previous;

        addGUIs();
        addActions();

        super.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

    public void refresh() {
        this.removeAll();
        addGUIs();
        addActions();
        this.refreshTheme();
    }

    private void addGUIs() {
        addBtn = new Button("Ajouter une nouvelle annonce");
        addBtn.setUIID("buttonWhiteCenter");
        this.add(addBtn);

        ArrayList<annonce> listannonces = AnnonceService.getInstance().getAll();

        for ( annonce rec : listannonces) {
            System.out.println(" rec :"+ rec);
        };
            
        
        if (listannonces.size() > 0) {
            for (annonce annonce : listannonces) {
                Component model = makeannonceModel(annonce);
                this.add(model);
            }
        } else {
            this.add(new Label("Aucune donnée"));
        }
    }
    private void addActions() {
        addBtn.addActionListener(action -> {
            currentannonce = null;
            new Manage(this).show();
        });
        
    }
    Label  lid, ltitre,ldescription;
    
    

    private Container makeModelWithoutButtons(annonce annonce) {
        Container annonceModel = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        annonceModel.setUIID("containerRounded");
        
        lid = new Label("id : " + annonce.getId());
        lid.setUIID("labelDefault");
        
        ltitre = new Label("titre : " + annonce.getTitre());
        ltitre.setUIID("labelDefault");
        
        ldescription = new Label("description : " + annonce.getDescription());
        ldescription.setUIID("labelDefault");
        
        
        
      
        
       
        annonceModel.addAll(                
             lid, ltitre,ldescription
        );

        return annonceModel;
    }
    
    Button editBtn, deleteBtn;
    Container btnsContainer;

    private Component makeannonceModel(annonce annonce) {

        Container annonceModel = makeModelWithoutButtons(annonce);

        btnsContainer = new Container(new BorderLayout());
        btnsContainer.setUIID("containerButtons");
        
        editBtn = new Button("Modifier");
        editBtn.setUIID("buttonWhiteCenter");
        
        editBtn.addActionListener(action -> {
            currentannonce = annonce;
            new Edit(previous, annonce).show();
        });
      
        
        deleteBtn = new Button("Supprimer");
        deleteBtn.setUIID("buttonWhiteCenter");
        deleteBtn.addActionListener(action -> {
            InteractionDialog dlg = new InteractionDialog("Confirmer la suppression");
            dlg.setLayout(new BorderLayout());
            dlg.add(BorderLayout.CENTER, new Label("Voulez vous vraiment supprimer ce Transaction ?"));
            Button btnClose = new Button("Annuler");
            btnClose.addActionListener((ee) -> dlg.dispose());
            Button btnConfirm = new Button("Confirmer");
            
            btnConfirm.addActionListener(actionConf -> {
              System.out.println("annonce ="+annonce);
              System.out.println("ID  ="+annonce.getId());
              AnnonceService.getInstance().delete(annonce.getId());         
                new ShowAll(previous).show();
            });
            
            Container btnContainer = new Container(new BoxLayout(BoxLayout.X_AXIS));
            btnContainer.addAll(btnClose, btnConfirm);
            dlg.addComponent(BorderLayout.SOUTH, btnContainer);
            dlg.show(800, 800, 0, 0);
        });

        btnsContainer.add(BorderLayout.WEST, editBtn);
        btnsContainer.add(BorderLayout.EAST, deleteBtn);
        
        
        annonceModel.add(btnsContainer);

        return annonceModel;
    }
    
}