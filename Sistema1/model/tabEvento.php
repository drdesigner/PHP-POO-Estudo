<?php 
	require_once 'db/dbconecta.php';

	class aEventos extends dbconecta{
		private $cod_trabalho;
		private $cod_evento;
		
		//Sets
		public function setCodEvento($codigo){
			$this->cod_evento = $codigo;
		}

		public function setCodTrabalho($codigo){
			$this->cod_trabalho = $codigo;
		}

		//Gets
		public function getCodEvento($codigo){
			return $this->cod_evento;
		}

		public function getCodTrabalho($codigo){
			return $this->cod_trabalho;
		}
	}
 ?>