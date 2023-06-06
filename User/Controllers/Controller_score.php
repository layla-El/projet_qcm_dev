<?php
class Controller_score extends Controller
{
    public function action_default()
    {
        $this->action_insertion_score();
    }


    public function action_insertion_score()
    {
        $m = Model::get_model();

        $id_theme = $_SESSION["id_theme"];
        $niveau = $_SESSION['niveau'];
        $id_utilisateur = $_SESSION['id_utilisateur'];
        $score = trim(htmlspecialchars($_POST['score']));

        $m->get_insertion_score($score, $niveau, $id_theme, $id_utilisateur);

        header("Location: ?controller=profil&action=afficher_profil");
    }
}

