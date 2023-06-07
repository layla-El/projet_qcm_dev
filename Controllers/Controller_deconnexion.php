<?php

class Controller_deconnexion extends Controller
{
    public function action_default()
    {
        $this->action_home(); // rediriger par défaut vers la page de connexion
    }

    public function action_home()
    {
        $this->render("home"); // afficher la page de connexion
    }

    public function action_deconnexion()
    {
        session_destroy();
        header('Location: index.php');
    }
}
