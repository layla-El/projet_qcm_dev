<?php

class Controller_home extends Controller
{
    public function action_default()
    {
  
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_sign_up()
    {
        $this->render("sign_up");
    }
}

?>
