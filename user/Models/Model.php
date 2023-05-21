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

    public function get_home()
    {
        $r = $this->bd->prepare("SELECT id_theme, libelle_theme, image_theme FROM themes ORDER BY libelle_theme");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // NIVEAUX //

    public function get_niveau()
    {
        $r = $this->bd->prepare("SELECT DISTINCT niveau FROM questions ORDER BY niveau");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // LIBELLÉ THEME //

    public function get_theme_libelle($libelle_theme)
    {
        $r = $this->bd->prepare("SELECT libelle_theme FROM themes WHERE id_theme = :id_theme");
        $r->bindParam(":id_theme", $libelle_theme);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }


    // QUESTONS //

    public function get_question($id_theme, $niveau)
    {
        $query = $this->bd->prepare("SELECT DISTINCT id_question, libelle_question FROM questions WHERE id_theme = :theme_id AND niveau = :level ORDER BY id_question");
        $query->bindParam(":theme_id", $id_theme);
        $query->bindParam(":level", $niveau);
        $query->execute();
    
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    


    // REPONSES//

    public function get_reponses_by_question($id_question)
    {
        $r = $this->bd->prepare("SELECT r.libelle_reponse, id_reponse
                                   FROM reponses r
                                   JOIN questions q ON q.id_question = r.id_question
                                   WHERE q.id_question = :id_question");
        $r->bindParam(":id_question", $id_question);
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }
}
