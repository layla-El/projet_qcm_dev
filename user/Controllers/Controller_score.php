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

        $score = trim(htmlspecialchars($_POST['score']));
        $m->get_traitement_score($score);
        header("Location: ?controller=profil&action=afficher_profil");
    }


    

}