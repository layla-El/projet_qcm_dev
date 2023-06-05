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

        $data = [
            'score1'=> $m->get_afficher_profil($id_utilisateur)
            // 'score2'=> $m->get_afficher_profil2($id_utilisateur)
            // 'score3'=> $m->get_afficher_profil3($id_utilisateur)
        ];
    
        $this->render("profil", $data );
    }
}