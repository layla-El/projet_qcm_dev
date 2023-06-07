<?php


abstract class Controller
{
    abstract public function action_default();

    public function __construct()

    {
        if (!$this->is_authenticated() && $this->requires_authentication()) {
            // Redirigez l'utilisateur vers la page de connexion ou effectuez une action appropriée
            header('Location:/php/projet_qcm_php/qcm_dev/projet_qcm_dev/');

            exit(); // Arrête l'exécution du script après la redirection
        }


        if (isset($_GET['action']) and method_exists($this, "action_" . $_GET['action'])) {
            $action = "action_" . $_GET['action'];
            $this->$action();
        } else {
            $this->action_default();
        }
    }


    protected function is_authenticated()
    {
        // Vérifiez si l'utilisateur est authentifié
        return isset($_SESSION['id_utilisateur']);
    }

    protected function requires_authentication()
    {
        // Vérifiez si l'action courante nécessite une authentification
        return true;
    }

    protected function render($vue, $data = [])
    {
        extract($data); // permet de récupérer sous forme de variables ce qu'il y a dans le tableau data
        $file_name = "Views/view_" . $vue . ".php";
        if (file_exists($file_name)) {
            require($file_name);
        } else {
            $this->action_error("pas de vue");
        }
    }
    protected function action_error($message)
    {
        $data = ['error' => $message];
        $this->render('error', $data);
        die();
    }
}
