package com.eshop.gui.annonce;

import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.eshop.entities.*;
import com.eshop.services.*;
import com.eshop.services.AnnonceService;
import com.eshop.gui.annonce.ShowAll;




public class Manage extends Form {
    Form previous;

    public Manage(Form previous) {
        super("Ajouter transaction", new BoxLayout(BoxLayout.Y_AXIS));
        super.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());

        TextField titre = new TextField("", "titre");
        TextField description = new TextField("", "description");
        TextField domaine = new TextField("", "domaine");
        TextField statut = new TextField("", "statut");

        Button btnValider = new Button("Add ");

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Form f2 = new Form(BoxLayout.y());
                Label ltitre = new Label("titre: " + titre.getText());
                Label ldescription = new Label("description: " + description.getText());
                Label ldomaine = new Label("domaine: " + domaine.getText());
                Label lstatut = new Label("statut: " + statut.getText());

                f2.add(ltitre);
                f2.add(ldescription);
                f2.add(ldomaine);
                f2.add(lstatut);

                f2.show();
                if ((titre.getText().length() == 0) || (description.getText().length() == 0) || (domaine.getText().length() == 0) || (statut.getText().length() == 0)) {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                } else {
                    annonce t = new annonce(titre.getText(), description.getText(), domaine.getText(), statut.getText());
                    if (AnnonceService.getInstance().addTask(t)) {
                        Dialog.show("Success", "Transaction added", new Command("OK"));
                        new ShowAll(previous).show();
                    } else {
                        Dialog.show("ERROR", "Server error", new Command("OK"));
                    }
                }
            }
        });

        addAll(titre, description, domaine, statut, btnValider);
    }
}