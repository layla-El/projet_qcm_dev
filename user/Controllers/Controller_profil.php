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
        $lastScores = $m->get_last_scores($id_utilisateur);

        $this->render("profil", ['lastScores' => $lastScores]);
    }

    // public function action_afficher_profil()
    // {
    //     $m = Model::get_model();
    //     $id_utilisateur = $_SESSION['id_utilisateur'];

    //     $data = [
    //         'score' => $m->get_afficher_profil($id_utilisateur)
    //     ];
    
    //     $this->render("profil", $data );
    // }

    // SELECT * FROM `choix` ORDER BY `date` DESC LIMIT 1; 
    // SELECT * FROM `choix` ORDER BY `date` LIMIT 1; 

}