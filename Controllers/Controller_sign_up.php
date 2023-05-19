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





    // INSCRIPTION // 


    public function action_insert_user()
    {

     
            $m = Model::get_model();

            $nom = trim(htmlspecialchars($_POST['nom']));
            $prenom = trim(htmlspecialchars($_POST['prenom']));
            $email = trim(htmlspecialchars($_POST['email']));
            $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);


           
            $data = $m->get_sign_up_user($nom, $prenom, $email, $mdp);
        
            $_SESSION['email'] = $data->email;
            $_SESSION['nom'] = $data->nom;
            $_SESSION['prenom'] = $data->prenom;

            header('Location: ?controller=home&action=home');
      
    }
}
