<?php 
	require_once 'db/dbconecta.php';

	class aEventos extends dbconecta{
		private $cod_pessoa;
		private $cod_trabalho;
		private $email_pessoa;
		private $funcao;
		private $instituicao;
		
		//Sets
		public function setCodPessoa($codigo){
			$this->cod_pessoa = $codigo;
		}

		public function setCodTrabalho($codigo){
			$this->cod_trabalho = $codigo;
		}

		public function setEmail($email){
			$this->email_pessoa = $email;
		}

		//Função padrão é ser Autor
		public function setFuncao($funcao='A'){
			$this->funcao = $funcao;
		}

		//Gets
		public function getCodPessoa($codigo){
			return $this->cod_pessoa;
		}

		public function getCodTrabalho($codigo){
			return $this->cod_trabalho;
		}

		public function getEmail($email){
			return $this->email_pessoa;
		}

		public function getFuncao(){
			return $this->funcao;
		}
	}
 ?>