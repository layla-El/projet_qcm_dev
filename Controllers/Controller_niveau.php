<?php

class Controller_niveau extends Controller
{
	public function action_default()
	{
		$this->action_niveau();
	}

	public function action_niveau()
	{
		$this->render("niveau");
	}
	
public function action_niveaux()
    {
$m=Model::get_model();
$data=["niveaux"=>$m->get_niveaux()];
$this->render("niveaux",$data);
 }

}
