<?php
class Controller_profil extends Controller
{
    public function action_default()
    {
        $this->action_afficher_profil();
    }


    public function action_afficher_profil()
    {
        $m = Model::get_model();
        $id_utilisateur = $_SESSION['id_utilisateur'];

        $data = $m->get_afficher_profil($id_utilisateur);
    
        $this->render("profil", $data);
    }



}