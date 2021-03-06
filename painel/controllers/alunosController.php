<?php
	class alunosController extends controller{

		public function __construct(){

			$u = new Usuarios();
			if(!$u->verificarLogin()){
				header("Location: ".BASE_URL."login");
			}
		}

		public function index(){

			$dados = array(
				'alunos' => array()
			);

			$alunos = new Alunos();
			$dados['alunos'] = $alunos->getAlunos();

			$this->loadTemplate("alunos", $dados);
		}

		public function adicionar(){

			$dados = array();

			$a = new Alunos();

			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);http://localhost:8080/ead/painel/alunos/editar/1
				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);

				$a->adicionar($nome, $email, $senha);

				header("Location: ".BASE_URL."alunos");				
			}

			$this->loadTemplate("alunos_add", $dados);
		}

		public function editar($id_aluno){

			$dados = array(
				'aluno' => array()
			);

			$alunos = new Alunos();
			$cursos = new Cursos();

			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = $_POST['senha'];
				$cursos = $_POST['cursos'];

				if(!empty($senha)){
					$alunos->update($id_aluno,$nome,$email,$senha);
					$alunos->deletaCursosAlunos($id_aluno);
					$alunos->adicionaCursosAlunos($id_aluno,$cursos);
				}else{
					$alunos->update($id_aluno,$nome,$email);
					$alunos->deletaCursosAlunos($id_aluno);
					$alunos->adicionaCursosAlunos($id_aluno,$cursos);					
				}

				header("Location: ".BASE_URL."alunos");
			}

			$dados['aluno'] = $alunos->getAluno($id_aluno);
			$dados['cursos'] = $cursos->getCursos();
			$dados['inscrito'] = $cursos->getCursosInscritos($id_aluno);			

			$this->loadTemplate('alunos_edit', $dados);
		}


		public function excluir($id_aluno){

			$c = new Alunos();
			$c->excluir($id_aluno);

			header("Location: ".BASE_URL."alunos");
		}		
	}
?>