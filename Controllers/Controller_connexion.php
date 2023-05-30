<?php

class Controller_connexion extends Controller
{
    public function action_default()
    {
        $this->action_afficher_connexion();
    }

    public function action_afficher_connexion()  // afficher la page de connexion
    {
        $this->render("connexion");
    }

    public function action_traitement_connexion()
    {
        $m = Model::get_model();
        if (isset($_POST['submit'])) {
            $user = $m->get_traitement_connexion();


            if ($user) {
                $nom = $user->nom;
                $prenom = $user->prenom;
                $role = $user->role;

                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['role'] = $role;
                // echo $nom . " " . $prenom . " " . $role . " " . "<br>";

                if ($_SESSION['role'] == 0) {
                    header('Location: user/?controller=home&action=home');
                }
            } else {
                //! Les identifiants de connexion sont incorrects
                header('Location: ?controller=connexionx&action=afficher_connexion');
            }
            // die("Aucun utilisateur trouvé");


        }
    }
}
