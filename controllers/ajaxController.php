<?php
	class ajaxController extends controller{

		public function __construct(){

			$alunos = new Alunos();
			if(!$alunos->verificarLogin()){
				header("Location: ".BASE_URL."login");
			}
		}

		public function marcarAssistido($id){

			$aulas = new Aulas();
			$aulas->marcarAssistido($id);
		}
	}
?>