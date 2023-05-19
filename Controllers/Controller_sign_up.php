<?php

class Controller_sign_up extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }


    public function action_home()
    {
        $this->render("home");
    }
    public function action_insert_user()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
            
            if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
                echo 'Certains champs sont vides';
                exit;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Format de l\'adresse mail incorrect';
                exit;
            }

            if (!filter_var($nom, FILTER_SANITIZE_STRING) || !filter_var($prenom, FILTER_SANITIZE_STRING)) {
                echo 'Format du nom ou du prénom incorrect';
                exit;
            }
            // Utilisation de FILTER_UNSAFE_RAW pour les champs de mot de passe
            if (!filter_var($password, FILTER_UNSAFE_RAW)) {
                echo 'Format du mot de passe incorrect';
                exit;
            }

            $nom = trim(htmlspecialchars($nom));
            $prenom = trim(htmlspecialchars($prenom));
            $email = trim($email);
            $password = trim(htmlspecialchars($password));


            $m = Model::get_model();
            $m->get_sign_up_user($nom, $prenom, $email, $hashed_password);
            $this->render("home");
        } else {
            $this->render("sign_up");
        }
    }
}

?>