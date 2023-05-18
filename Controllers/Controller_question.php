<?php

class Controller_question extends Controller
{
	public function action_default()
	{
		$this->action_question();
	}

    public function action_niveau_question()
    {
        $m = Model::get_model();
        $id_theme = $_GET["id_theme"];
        $libelle_theme = $m->get_theme_libelle($id_theme); // Ajout de la fonction get_theme_libelle
        $data = [
            "niveaux" => $m->get_niveau_questions(),
            "libelle_theme" => $libelle_theme, // Utilisation de la variable $libelle_theme
            "id_theme" => $id_theme
        ];
        $this->render("niveau", $data);
    }

	public function action_question()
    {
        $id_theme = $_GET['id_theme'];
        $niveau = $_GET['niveau'];
        $libelle_reponse = $m->get_all_reponses($id_reponse);
        $m = Model::get_model();
        $data = [
            "questions" => $m->get_question($id_theme, $niveau),
            "reponses" => $libelle_reponse
        ];
        $this->render("question", $data);
    }

 
}
