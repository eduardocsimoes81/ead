<?php
	class loginController extends controller{

		public function index(){

			$dados = array();

			if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);

				$alunos = new Alunos();

				if($alunos->fazerLogin($email, $senha)){
					header("Location: ".BASE_URL);
				}
			}

			$this->loadView('login', $dados);
		}

		public function logout(){

			unset($_SESSION['lgsocial']);
			header("Location: ".BASE_URL);
		}
	}
?>