<?php

class Controller_question extends Controller
{
    public function action_default()
    {

        $this->action_question();
    }


    public function action_question()
    {
        // Vérifier si l'identifiant de la question actuelle est présent dans la requête
        $questionIndex = isset($_GET['question']) ? (int)$_GET['question'] : 1;
        $id_theme = $_GET['id_theme'];
        $niveau = $_GET['niveau'];
        $m = Model::get_model();
        $libelle_theme = $m->get_theme_libelle($id_theme);
        $questions = $m->get_question($id_theme, $niveau);
        $totalQuestions = count($questions);
        $currentQuestion = $questions[$questionIndex - 1];
        $reponses = array();
        foreach ($questions as $question) {
            $id_question = $question->id_question;
            $reponses[$id_question] = $m->get_reponses_by_question($id_question);
        }
        $data = [
            "questions"=> $questions,
            "reponses"=> $reponses,
            "libelle_theme" => $libelle_theme,
            "id_theme" => $id_theme,
            "currentQuestion" => $currentQuestion,
            "questionIndex" => $questionIndex,
            "totalQuestions" => $totalQuestions
        ];
        
        $this->render("question", $data);
    }
}
        // $reponses = array();
        // foreach ($questions as $question) {
        //     $libelle_reponse = $question->libelle_reponse;
        //     $reponses[$libelle_reponse] = $m->get_all_reponses($libelle_reponse);
        // }

        
