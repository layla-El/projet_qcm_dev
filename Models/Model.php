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
        try {
            $this->bd = new PDO($dsn, $login, $mdp);
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "erreur de se connecter à la base:" . $e->getMessage();
        }
    }



    // get_model()

    public static function get_model()
    {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    public function get_home()
    {
        $r = $this->bd->prepare("SELECT libelle_theme, image_theme FROM themes ORDER BY libelle_theme");
        $r->execute();
        // $r = $this->bd->prepare("SELECT * FROM themes ORDER BY libelle_theme");
        // $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }
}