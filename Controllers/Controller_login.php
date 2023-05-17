<?php

class Controller_login extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }
    public function action_home()
    {
        $this->render("home");
    }
    public function action_login()
    {
        $m = Model::get_model();
        if (isset($_POST['submit'])) {
            $user = $m->get_login_user();
            
            
            if ($user) {
                $nom = $user->nom;
                $prenom = $user->prenom;
                $role = $user->role;

                $_SESSION['name'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['role'] = $role;
                var_dump($user);
          

                if ($_SESSION['role'] === 0) {
                    header('Location: User/?controller=home&action=home');
                    var_dump($_SESSION['role']);
                }
            } else {
                //! Les identifiants de connexion sont incorrects
                header('Location: ?controller=home&action=home');
            }
            // die("Aucun utilisateur trouvé");
        }

    }
}


