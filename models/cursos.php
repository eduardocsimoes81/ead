<?php
	class Cursos extends model{

		private $info;

		public function verificarLogin(){

			if(isset($_SESSION['lgsocial']) && !empty($_SESSION['lgsocial'])){
				return true;
			}else{
				return false;
			}
		}

		public function getCursosDoAluno($id){

			$array = array();

			$sql = "
				SELECT 
					aluno_curso.id_curso,
					cursos.nome,
					cursos.imagem,
					cursos.descricao
				FROM 
					aluno_curso
				LEFT JOIN 
					cursos
				ON
					cursos.id = aluno_curso.id_curso
				WHERE 
					aluno_curso.id_aluno = :id
			";

			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id",$id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function setCurso($id){

			$array = array();

			$sql = "SELECT * FROM cursos WHERE id = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id", $id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$this->info = $sql->fetch();
			}
		}

		public function getNome(){
			return $this->info['nome'];
		}

		public function getImagem(){
			return $this->info['imagem'];
		}

		public function getDescricao(){
			return $this->info['descricao'];
		}

		public function getId(){

			return $this->info['id'];
		}

		public function getTotalAulas(){

			$sql = "SELECT id FROM aulas WHERE id_curso ='".($this->getId())."'";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			return $sql->rowCount();
		}
	}
?>