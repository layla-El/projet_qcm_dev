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






    // CONNEXION //

    public function get_login_user()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $r = $this->bd->prepare("SELECT * FROM utilisateurs WHERE email=:email");
        $r->bindParam(':email', $email);
        $r->execute();
        
        if ($r->rowCount() > 0) {
            //* L'utilisateur existe, on vérifie le mot de passe
            $user = $r->fetch(PDO::FETCH_OBJ);
            $hashed_password = $user->mdp;

            if (password_verify($password, $hashed_password)) {
                //* Le mot de passe correspond au mot de passe hashé de la DB, on return l'objet user
                return $user;
            } else {
                //! Le mot de passe ne correspond pas au mot de passe hashé de la DB, on return NULL
                return null;
            }
        } else {
            //! Utilisateur non existant, on return NULL
            return null;
        }
    }
    




    // INSCRIPTION // 


    public function get_sign_up_user($nom, $prenom, $email, $mdp)
    {

        $r = $this->bd->prepare("INSERT INTO `utilisateurs` (nom, prenom, email, mdp) VALUES (:nom,:prenom,:email,:mdp)");
        $r->bindParam(':nom', $nom);
        $r->bindParam(':prenom', $prenom);
        $r->bindParam(':email', $email);
        $r->bindParam(':mdp', $mdp);
        $r->execute();

        return $r->fetch(PDO::FETCH_OBJ);
    }
}
