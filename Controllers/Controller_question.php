<?php

class Controller_question extends Controller
{
	public function action_default()
	{
		$this->action_question();
	}
	public function action_question()
    {
        $id_theme = $_GET['id_theme'];
        $niveau = $_GET['niveau'];
        $m = Model::get_model();
        $data = [
            "questions" => $m->get_question($id_theme, $niveau)
        ];

        $this->render("question", $data);
    }
	public function action_niveau_question() {
$id_theme=$_GET["id_theme"];
$m=Model::get_model();
$data=["niveaux"=>$m->get_niveau_questions(),
"id_theme"=>$id_theme];
$this->render("niveau_questions",$data);
 }
}
