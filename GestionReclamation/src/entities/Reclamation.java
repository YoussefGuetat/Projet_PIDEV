/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import java.util.Date;

/**
 *
 * @author Mega-PC
 */
public class Reclamation {
    private int id;
    private int utilisateur_id;
    private int assist_id;
    private Date date_rec;
    private String sujet;
    private String contenu;
    private String etat;

    public Reclamation() {
    }

    public Reclamation(int id, int utilisateur_id, int assist_id, Date date_rec, String sujet, String contenu, String etat) {
        this.id = id;
        this.utilisateur_id = utilisateur_id;
        this.assist_id = assist_id;
        this.date_rec = date_rec;
        this.sujet = sujet;
        this.contenu = contenu;
        this.etat = etat;
    }

    public Reclamation(int utilisateur_id, int assist_id, Date date_rec, String sujet, String contenu, String etat) {
        this.utilisateur_id = utilisateur_id;
        this.assist_id = assist_id;
        this.date_rec = date_rec;
        this.sujet = sujet;
        this.contenu = contenu;
        this.etat = etat;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getUtilisateur_id() {
        return utilisateur_id;
    }

    public void setUtilisateur_id(int utilisateur_id) {
        this.utilisateur_id = utilisateur_id;
    }

    public int getAssist_id() {
        return assist_id;
    }

    public void setAssist_id(int assist_id) {
        this.assist_id = assist_id;
    }

    public Date getDate_rec() {
        return date_rec;
    }

    public void setDate_rec(Date date_rec) {
        this.date_rec = date_rec;
    }

    public String getSujet() {
        return sujet;
    }

    public void setSujet(String sujet) {
        this.sujet = sujet;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }
    
    
    
    
    
}
