<?php

class Model
{   // Début de la Classe

    private $bd;

    private static $instance = null;

    /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
    private function __construct()
    {  // Fonction qui sert à faire le lien avec la BDD

        $dsn = "mysql:host=localhost;dbname=qcm_db";   // Coordonnées de la BDD
        $login = "root";   // Identifiant d'accès à la BDD
        $mdp = ""; // Mot de passe d'accès à la BDD
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query("SET NAMES 'utf8'");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // get_model()

    public static function get_model()
    {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }


    // THEMES //

    public function get_afficher_themes()
    {
        $r = $this->bd->prepare("SELECT id_theme, libelle_theme, image_theme FROM themes");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // NIVEAUX //

    public function get_afficher_niveaux_par_theme($id_theme)
    {
        $r = $this->bd->prepare("SELECT DISTINCT niveau FROM questions WHERE id_theme = :id_theme");
        $r->bindParam(":id_theme", $id_theme);
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }




    public function get_afficher_libelle_themes_par_niveaux($id_theme)
    {
        $r = $this->bd->prepare("SELECT DISTINCT libelle_theme FROM themes WHERE id_theme = :id_theme");
        $r->bindParam(":id_theme", $id_theme);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }




    // traitement_questions_et_reponses_par_theme_et_niveau //

    public function get_id_questions($id_theme, $niveau)
    {
        $r = $this->bd->prepare("SELECT id_question FROM questions WHERE id_theme = :id_theme AND niveau = :niveau;");
        $r->bindParam(":id_theme", $id_theme);
        $r->bindParam(":niveau", $niveau);
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }




    public function get_afficher_une_question($id_question)
    {
        // - une requete pour récupérer le libelle de la 1ere question 
        $r = $this->bd->prepare("SELECT libelle_question, id_theme, niveau FROM questions WHERE id_question = :id_question");
        $r->bindParam(":id_question", $id_question);
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }




    public function get_afficher_une_reponse($id_question)
    {
        // - une requete pour récupérer les réponses
        $r = $this->bd->prepare("SELECT libelle_reponse, `type` FROM reponses WHERE id_question = :id_question");
        $r->bindParam(":id_question", $id_question);
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }





    // RETOUR VERS NIVEAUX // 


    public function get_retour_niveaux_theme($id_theme)
    {
        $r = $this->bd->prepare("SELECT libelle_theme FROM themes WHERE id_theme = :id_theme");
        $r->bindParam(":id_theme", $id_theme);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }




    public function get_retour_niveaux_niveaux($id_theme)
    {
        $r = $this->bd->prepare("SELECT DISTINCT niveau FROM questions WHERE id_theme = :id_theme");
        $r->bindParam(":id_theme", $id_theme);
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }




    // TRAITEMENT SCORE  //


    public function get_insertion_score($score, $niveau, $id_theme, $id_utilisateur)
    {
        $r = $this->bd->prepare("INSERT INTO `choix` (score, niveau, id_theme, id_utilisateur) VALUES (:score, :niveau, :id_theme, :id_utilisateur)");
        $r->bindParam(':score', $score);
        $r->bindParam(':niveau', $niveau);
        $r->bindParam(':id_theme', $id_theme);
        $r->bindParam(':id_utilisateur', $id_utilisateur);
        $r->execute();

        return $r->fetch(PDO::FETCH_OBJ);
    }



    // AFFICHER PROFIL ET SCORE //

    public function get_afficher_profil($id_utilisateur)
    {
        $r = $this->bd->prepare("SELECT * FROM `choix` WHERE id_utilisateur = :id_utilisateur AND niveau ='Débutant' ORDER BY `date` DESC LIMIT 1;");
        $r->bindParam(":id_utilisateur", $id_utilisateur);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }

}
