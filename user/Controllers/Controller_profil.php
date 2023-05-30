<?php
class Controller_profil extends Controller
{
    public function action_default()
    {
        $this->action_afficher_profil();
    }


    public function action_afficher_profil()
    {

        $this->render("profil");
    }



}