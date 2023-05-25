<?php 
class Controller_question extends Controller
{
    public function action_default()
    {
        $this->action_id_questions();
    }


    public function action_id_questions()
    {
        $m = Model::get_model();

        $id_theme = $_GET['id_theme'];
        $niveau = $_GET['niveau'];

        $id_questions = $m->get_id_questions($id_theme, $niveau);

        $_SESSION["id_questions"] = $id_questions;

        $cpt = 0;
        $_SESSION["cpt"] = $cpt;

        $this->render("question");
    }



    public function action_afficher_une_question()
    {
        $m = Model::get_model();

        $liste_questions = $_SESSION["id_questions"];
        $cpt = $_SESSION["cpt"];
        // echo $cpt;

        $id_question = $liste_questions[$cpt]->id_question;
        $libelle_question = $m->get_afficher_une_question($id_question);
        $libelle_reponse = $m->get_afficher_une_reponse($id_question);

        $data = [
            'libelle_question' => $libelle_question,
            'libelle_reponse' => $libelle_reponse
        ];

        $cpt++;
        $_SESSION["cpt"] = $cpt;



        if ($cpt === 11){
            $this->render("score", $data);
        }else {
            $this->render("afficher_une_question", $data);
        }
    }
}