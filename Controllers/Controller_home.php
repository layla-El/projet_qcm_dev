<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $m = Model::get_model();
        $data = ["themes" => $m->get_home()];
        // var_dump($data["themes"]);
        $this->render("home", $data);
    }
}

?>