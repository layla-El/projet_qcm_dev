<?php

class Controller_themes extends Controller
{
    public function action_default()
    {
        $this->action_afficher_themes();
    }

    public function action_afficher_themes()  // afficher la page d'acceuil des themes
    {
        $m = Model::get_model();
        $data = ["themes" => $m->get_traitement_themes()];
        $this->render("themes", $data);
    }



    // NIVEAUX PAR THEMES //

    public function action_afficher_niveaux_par_theme()
    {
        $m = Model::get_model();
        $id_theme = $_GET['id_theme'];
        $libelle_theme = $m->get_afficher_libelle_themes_par_niveaux($id_theme);

        $_SESSION["id_theme"] = $id_theme;

        $data = [
            "niveaux" => $m->get_afficher_niveaux_par_theme($id_theme),
            "libelle_theme" => $libelle_theme,
            "id_theme" => $id_theme
        ];
        $this->render("niveau", $data);
    }

    public function action_retour_niveaux()
    {
        $m = Model::get_model();
        $id_theme = $_SESSION["id_theme"];

        $libelle_theme = $m->get_retour_niveaux_theme($id_theme);
        $niveaux = $m->get_retour_niveaux_niveaux($id_theme);

        $data = [
            "libelle_theme" => $libelle_theme,
            "niveaux" => $niveaux,
            "id_theme" => $id_theme
        ];

        $this->render("retour_niveau", $data);
    }
}
