package com.eshop.services;

import com.annonce.utils.Statics;
import com.annonce.entities.annonce;
import com.codename1.components.InfiniteProgress;
import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class AnnonceService {
  
    public static boolean resultOk = true;
    public static AnnonceService instance = null;
    public int resultCode;
    public boolean resultOK;
    private ConnectionRequest cr,req;
    private ArrayList<annonce> listannonces;

    

    private AnnonceService() {
        cr = new ConnectionRequest();
        req= new ConnectionRequest();
    }

    public static AnnonceService getInstance() {
        if (instance == null) {
            instance = new AnnonceService();
        }
        return instance;
    }
    
    
        public boolean addTask(annonce t) {

            
            String titre = t.getTitre();
            String description = t.getDescription();
            
            
//            String url = Statics.BASE_URL + "/mobile/addproduit/JSON?id_p="+t.getId_p()
//                                          +"&nom_p="+t.getNom_p()
//                                          +"&type_p="+t.getType_p()
//                                          +"&prix_p="+t.getPrix_p()
//                                          +"&stock_p="+t.getStock_p();
            String url =Statics.BASE_URL+"annonce/json/addannonce?titre="+t.getTitre()+"&description="+t.getDescription(); 
        
            System.out.println("url : "+ url);
            req.setUrl(url);
            req.setHttpMethod("POST");

            req.addResponseListener(new ActionListener<NetworkEvent>() {
                @Override
                public void actionPerformed(NetworkEvent evt) {
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                    req.removeResponseListener(this);
                }
            });
            NetworkManager.getInstance().addToQueueAndWait(req);
            return resultOK;
        }

    
    public ArrayList<annonce> getAll() {
        listannonces = new ArrayList<>();

        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "annonce/json/annonces");
        System.out.println("url = "+cr);
        cr.setHttpMethod("GET");

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                if (cr.getResponseCode() == 200) {
                    listannonces = getList();   
                }

                cr.removeResponseListener(this);
            }
        });

        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception e) {
            e.printStackTrace();
        }

        return listannonces;
    }

    private ArrayList<annonce> getList() {
           JSONParser jsonp ;
            jsonp = new JSONParser();
            
        try {
            Map<String, Object> parsedJson =jsonp.parseJSON(new CharArrayReader(                    
                    new String(cr.getResponseData()).toCharArray()
            ));
            List<Map<String, Object>> list = (List<Map<String, Object>>) parsedJson.get("root");

            for (Map<String, Object> obj : list) {
                annonce annonce = new annonce();
                
                      float id = Float.parseFloat( obj.get("id").toString() ) ; 
                      
                        annonce.setTitre((String)obj.get("titre").toString());
                        annonce.setDescription((String)obj.get("description").toString());
                        
                        //System.out.println("annonce test :  "+ annonce);
                        
                         
                        annonce.setId((int)id);
                
                        listannonces.add(annonce);
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        return listannonces;
    }
    
    public int add(annonce annonce) {
        return manage(annonce);
    }

    public int edit(annonce annonce) {
        return manage(annonce );
    }

    public int manage(annonce annonce) {
        
        cr = new ConnectionRequest();
        
        cr.setHttpMethod("GET");                                               
            cr.setUrl(Statics.BASE_URL + "annonce/json/annonce/?id="+(int)annonce.getId()+"&titre="+annonce.getTitre()+"&description="+annonce.getDescription());
            cr.addArgument("id", String.valueOf(annonce.getId()));
     
        
        //cr.addArgument("date", new SimpleDateFormat("dd-MM-yyyy").format(annonce.getDate()));
        
        cr.addArgument("titre", annonce.getTitre());
        cr.addArgument("description", annonce.getDescription());
        
        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultCode = cr.getResponseCode();
                cr.removeResponseListener(this);
            }
        });
        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception ignored) {

        }
        return resultCode;
    }

    
    //Update 
    public boolean modifier(annonce annonce) {
        String url = Statics.BASE_URL +"annonce/json/update/id"+"?titre="+annonce.getTitre()+"&description="+annonce.getDescription()+"&id="+(int)annonce.getId();
        req.setUrl(url);
        System.out.println("url modif : "+url);
      req.setHttpMethod("POST");

            req.addResponseListener(new ActionListener<NetworkEvent>() {
                @Override
                public void actionPerformed(NetworkEvent evt) {
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                    req.removeResponseListener(this);
                }
            });
            NetworkManager.getInstance().addToQueueAndWait(req);
            return resultOK;
       
        
    }
    public int delete(int id) {
        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "annonce/json/delete/"+id);
        System.out.println("url delete : "+cr);
        cr.setHttpMethod("POST");
        // cr.addArgument("id", String.valueOf(id));
        
        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                cr.removeResponseListener(this);
            }
        });
        
        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return cr.getResponseCode();
    }
}
