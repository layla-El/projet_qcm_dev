<?php
class Controller_profil extends Controller
{
    public function action_default()
    {
        $this->action_afficher_profil();
    }


    public function action_afficher_profil()
    {
        // $id_utilisateur = $_SESSION['id_utilisateur'];
        // $data = [
        //     'id_utilisateur' => $id_utilisateur
        // ];
        $this->render("profil");
    }



}