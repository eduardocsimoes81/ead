<?php
	class homeController extends controller{

		public function __construct(){

			$u = new Alunos();
			if(!$u->verificarLogin()){
				header("Location: ".BASE_URL."login");
			}
		}

		public function index(){

			$dados = array(
				'info' => array(),
				'cursos' => array()
			);

			$alunos = new Alunos();
			$alunos->setAluno($_SESSION['lgsocial']);
			$dados['info'] = $alunos;

			$cursos = new Cursos();
			$dados['cursos'] = $cursos->getCursosDoAluno($alunos->getId());
			
			$this->loadTemplate('home', $dados);
		}
	}
?>