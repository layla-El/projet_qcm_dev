<?php
class Controller_score extends Controller
{
    public function action_default()
    {
        $this->action_traitement_score();
    }


    public function action_traitement_score()
    {
        $m = Model::get_model();

        $id_theme = $_SESSION["id_theme"];
        $niveau = $_SESSION['niveau'];
        $id_utilisateur = $_SESSION['id_utilisateur'];
        $score = $_SESSION['score'];

        $m->get_insert_score($id_theme, $id_utilisateur, $score, $niveau);

        header("Location:?controller=profil&action=afficher_profil");
    }
}
