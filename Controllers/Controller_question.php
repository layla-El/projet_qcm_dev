<?php

class Controller_question extends Controller
{
	public function action_default()
	{
		$this->action_question();
	}
	
	public function action_niveau_question() {
$m=Model::get_model();
$data=["niveaux"=>$m->get_niveau_questions()];
$this->render("niveau_questions",$data);
 }
}
