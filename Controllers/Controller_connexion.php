<?php

class Controller_connexion extends Controller
{
    public function action_default()
    {
        $this->action_afficher_connexion();
    }



    public function action_afficher_connexion()  // afficher la page de connexion
    {
        $this->render("connexion");
    }



    public function action_traitement_connexion()
    {
        $m = Model::get_model();
        
        if (isset($_POST['submit'])) {
            $user = $m->get_traitement_connexion();
            
            
            if ($user) {
                $nom = $user->nom;
                $prenom = $user->prenom;
                $id_utilisateur = $user->id_utilisateur;
                $role = $user->role;


                $_SESSION['name'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['id_utilisateur'] = $id_utilisateur;
                $_SESSION['role'] = $role;
          

                if ($_SESSION['role'] === 0) {
                    header('Location: user/?controller=themes&action=afficher_themes');
                }
            } else {
                //! Les identifiants de connexion sont incorrects
                header('Location: ?controller=connexionx&action=afficher_connexion');
            }
            // die("Aucun utilisateur trouvé");
        

    }
}}