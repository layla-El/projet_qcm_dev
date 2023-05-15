<?php

class Controller_reponse extends Controller
{
	public function action_default()
	{
		$this->action_reponse();
	}
	
    public function action_all_reponses()
    {
$m=Model::get_model();
$data=["reponses"=>$m->get_all_reponses()];
$this->render("all_reponses",$data);

 }
}
