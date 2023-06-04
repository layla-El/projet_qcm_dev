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
        //Stocker le niveau dans la $_SESSION
        $_SESSION['niveau'] = $niveau;

        $id_questions = $m->get_id_questions($id_theme, $niveau);

        $_SESSION["id_questions"] = $id_questions;

        $cpt = 0;
        $_SESSION["cpt"] = $cpt;
        $_SESSION['score'] = 0;

        $this->render("question");
    }



    public function action_afficher_une_question()
    {
        $m = Model::get_model();

        $liste_questions = $_SESSION["id_questions"];
        $cpt = $_SESSION["cpt"];
        // echo $cpt;

        $id_question = $liste_questions[$cpt]->id_question;
        //echo $id_question;

        $libelle_question = $m->get_afficher_une_question($id_question);
        $libelle_reponse = $m->get_afficher_une_reponse($id_question);
        // Stockez les valeurs de type dans une variable

        if (isset($_POST['selected_reponse'])) {

            $selectedReponses = $_POST["selected_reponse"];
            //var_dump($_POST);
            //var_dump($selectedReponses);


            if ($selectedReponses === '1') {
                $_SESSION['score']++;
            }
        }

        $data = [
            'libelle_question' => $libelle_question,
            'libelle_reponse' => $libelle_reponse
        ];

        $cpt++;
        $_SESSION["cpt"] = $cpt;

        if ($cpt === 10) {
            $this->render("score", $data);
        } else {
            $this->render("afficher_une_question", $data);
        }
    }
}



        //var_dump($_POST);
        //var_dump($selectedReponses);


        //calcluler le score en fonction de la réponse selectionnée
        // Gérez le cas où $selectedReponses n'est pas un tableau
        // if (is_array($selectedReponses)) {
        //    // $score = $this->calculerScore($selectedReponses);
        //     $_SESSION['score'] = $score;
        // } else {

        //     // Vous pouvez définir un score par défaut ou afficher un message d'erreur
        //     $_SESSION['score'] = 0; // Score par défaut
        //     // Autres actions à prendre en cas d'erreur
        // }
       

    //Ondéfinit la fonction qui calcules le score: 
    // private  function calculerScore($selectedReponses)
    // {
    //     // var_dump($selectedReponses); // Vérifier les valeurs des réponses sélectionnées
    //     $score = 0;
    //     foreach ($selectedReponses as $selectedReponse) {
    //         if ($selectedReponse === '1') {
    //             $score += 1;
    //         } else if ($selectedReponse === '0') {
    //             $score += 0;
    //         }
    //     }
    //     return $score;
    // }
