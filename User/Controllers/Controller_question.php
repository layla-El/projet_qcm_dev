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
        $_SESSION['niveau'] = $niveau;
        $_SESSION['score'] = 0;

        $cpt = 0;
        $_SESSION["cpt"] = $cpt;

        $this->render("question");
    }


    public function action_afficher_une_question()
    {
        $m = Model::get_model();
       
        $liste_questions = $_SESSION["id_questions"];
        $cpt = $_SESSION["cpt"];

        $id_theme = $_SESSION["id_theme"];
        $id_question = $liste_questions[$cpt]->id_question;

        $libelle_question = $m->get_afficher_une_question($id_question);
        $libelle_reponse = $m->get_afficher_une_reponse($id_question);
        $libelle_theme = $m->get_theme_libelle($id_theme);

        //echo '<p>cpt: ' . $cpt . 'id question: ' . $id_question . 'id theme: ' . $id_theme . '</p>';

        $data = [
            'libelle_question' => $libelle_question,
            'libelle_reponse' => $libelle_reponse,
            'libelle_theme' => $libelle_theme

        ];

        // Enregistrer le type de réponse sélectionné
        if (isset($_POST['selected_reponse'])) {
            $selectedAnswer = (int)$_POST['selected_reponse'];
            $_SESSION['selections'][] = $selectedAnswer;
            $_SESSION['score'] = $selectedAnswer;
        }

        // Calculer le total des réponses sélectionnées
        $total = array_sum($_SESSION['selections'] ?? []);

        $cpt++;
        $_SESSION["cpt"] = $cpt;


        if ($cpt === 11) {
            $data["total"] = $total;
            $this->render("score", $data);

            // Réinitialiser le tableau $_SESSION['selections']
            unset($_SESSION['selections']);
        } else {
            $this->render("afficher_une_question", $data);
        }
    }
}