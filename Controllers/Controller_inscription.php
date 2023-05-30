<?php

class Controller_inscription extends Controller
{
    public function action_default()
    {
        $this->action_afficher_inscription();
    }


    public function action_afficher_inscription()
    {
        $this->render("inscription");
    }



    // INSCRIPTION // 


    public function action_traitement_inscription()
    {

     
            $m = Model::get_model();

            $nom = trim(htmlspecialchars($_POST['nom']));
            $prenom = trim(htmlspecialchars($_POST['prenom']));
            $email = trim(htmlspecialchars($_POST['email']));
            $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);


           
            $data = $m->get_traitement_inscription($nom, $prenom, $email, $mdp);
        
            $_SESSION['email'] = $data->email;
            $_SESSION['nom'] = $data->nom;
            $_SESSION['prenom'] = $data->prenom;

            header('Location: ?controller=connexion&action=afficher_connexion');
      
    }
}
