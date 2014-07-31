<?php 
	require_once 'db/dbconecta.php';

	class aPessoas extends dbconecta{
		private $cod_pessoa;
		private $nome_pessoa;
		
		//Sets
		public function setCodPessoa($codigo){
			$this->cod_pessoa = $codigo;
		}

		public function setNome($nome){
			$this->nome_pessoa = $nome;
		}

		//Gets
		public function getCodPessoa($codigo){
			return $this->cod_pessoa;
		}

		public function getCodTrabalho($codigo){
			return $this->nome_pessoa;
		}
	}
 ?>