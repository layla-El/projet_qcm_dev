<?php
class Controller_profil extends Controller
{
    public function action_default()
    {
        $this->action_afficher_profil();
    }

    //l'action pour afficher le profil avec les scores fait par l'utilisateur

    public function action_afficher_profil()
    {
        $m = Model::get_model();
        $id_utilisateur = $_SESSION['id_utilisateur'];
        $lastScores = $m->get_last_scores($id_utilisateur);

        $this->render("profil", ['lastScores' => $lastScores]);
    }
}
