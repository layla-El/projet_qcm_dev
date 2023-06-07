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

        // 1. Validation de l'entrée
        if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email']) || !isset($_POST['password'])) {
            // Pas tous les champs nécessaires ont été soumis, redirection vers la page d'inscription
            header('Location: ?controller=inscription&action=afficher_inscription');
            return;
        }

        $m = Model::get_model();

        $nom = trim(htmlspecialchars($_POST['nom']));
        $prenom = trim(htmlspecialchars($_POST['prenom']));
        $email = trim(htmlspecialchars($_POST['email']));
        $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Vérification de l'adresse e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // L'adresse e-mail n'est pas valide, redirection vers la page d'inscription
            header('Location: ?controller=inscription&action=afficher_inscription');
            return;
        }

        // Vérification de la longueur du mot de passe
        if (strlen($mdp) < 8) {
            // Le mot de passe est trop court, redirection vers la page d'inscription
            header('Location: ?controller=inscription&action=afficher_inscription');
            return;
        }



        $data = $m->get_traitement_inscription($nom, $prenom, $email, $mdp);

        $_SESSION['email'] = $data->email;
        $_SESSION['nom'] = $data->nom;
        $_SESSION['prenom'] = $data->prenom;

        header('Location: ?controller=connexion&action=afficher_connexion');
    }
}
