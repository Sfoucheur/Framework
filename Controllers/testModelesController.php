<?php

class testModelesController extends Controller{
    function index(){
        try{

            // Tests Utilisateur Modele
            $this->loadModel('Utilisateur');
            $MODELUtilisateur = new UtilisateurModele();
            //$MODELUtilisateur->addUtilisateur('test0','test0', 'ploufragan', 'test0@test.fr', '1');
            //$MODELUtilisateur->updateUtilisateur(3,'test1',null,null,null,null,null,1);
            //$MODELUtilisateur->deleteUtilisateur(4);
            $data['utilisateurs'] = $MODELUtilisateur->getAllUtilisateurs();
            $data['utilisateurID'] = $MODELUtilisateur->getUtilisateurById(1);
            $this->set($data);
            $this->render('index');

        }catch(modelNotFoundException $e){
            $e->errorInfo();
        }catch(viewNotFoundException $e){
            $e->errorInfo();
        }
    }

}