<?php
	class cursosController extends controller{

		public function __construct(){

			$alunos = new Alunos();
			if(!$alunos->verificarLogin()){
				header("Location: ".BASE_URL."login");
			}
		}

		public function index(){

			header("Location: ".BASE_URL);
		}

		public function entrar($id){

			$dados = array(
				'info' => array(),
				'curso' => array(),
				'aulas' => array()
			);

			$alunos = new Alunos();
			$alunos->setAluno($_SESSION['lgsocial']);
			$dados['info'] = $alunos;			

			if($alunos->isInscrito($id)){
				$curso = new Cursos();
				$curso->setCurso($id);

				$dados['curso'] = $curso;

				$this->loadTemplate('curso_entrar', $dados);
			}else{
				header('Location: '.BASE_URL);
			}
		}
	}
?>