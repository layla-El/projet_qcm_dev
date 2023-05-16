<?php

class Controller_login extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }
    public function action_home()
    {
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $user = $m->get_login_user();

            if ($user !== null) {
                $nom = $user->nom;
                $prenom = $user->prenom;
                $roles = $user->role;

                $_SESSION['name'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['roles'] = $roles;

                if ($_SESSION['roles'] === "0") {
                    header('Location: User/?controller=home&action=home');
                }
            } else {
                //! Les identifiants de connexion sont incorrects
                header('Location: ?controller=home&action=home');
            }
            die("Aucun utilisateur trouvé");
        }

    }
}


