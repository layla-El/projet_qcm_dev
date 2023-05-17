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
    
    public function get_niveau_questions()
{
    $r = $this->bd->prepare("SELECT DISTINCT niveau FROM questions ORDER BY niveau");
    $r->execute();
    return $r->fetchAll(PDO::FETCH_OBJ);
}

public function get_theme_libelle($libelle_theme)
{
    $r = $this->bd->prepare("SELECT libelle_theme FROM themes WHERE id_theme = :id_theme");
    $r->bindParam(":id_theme", $libelle_theme);
    $r->execute();
    return $r->fetch(PDO::FETCH_OBJ);
}
    
    public function get_question($id_theme, $niveau)
    {
        $r = $this->bd->prepare("SELECT * FROM questions WHERE id_theme = :theme_id AND niveau = :level ORDER BY RAND() LIMIT 10");
        $r->bindParam(":theme_id", $id_theme);
        $r->bindParam(":level", $niveau);
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_reponses() 
    {
        $r = $this->bd->prepare("SELECT * FROM reponses ORDER BY id_reponse") ;
        $r->execute() ;
        return $r->fetchAll(PDO::FETCH_OBJ) ;
    }
}
