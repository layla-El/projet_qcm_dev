<?php

class Controller_niveau extends Controller
{
    public function action_default()
    {

        $this->action_niveau();
    }
    
    public function action_niveau()
    {
        $m = Model::get_model();
        $id_theme = $_GET["id_theme"];
        $libelle_theme = $m->get_theme_libelle($id_theme); // Ajout de la fonction get_theme_libelle
        $data = [
            "niveaux" => $m->get_niveau(),
            "libelle_theme" => $libelle_theme, // Utilisation de la variable $libelle_theme
            "id_theme" => $id_theme
        ];
        $this->render("niveau", $data);
    }
}