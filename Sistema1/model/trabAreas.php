<?php 
	require_once 'db/dbconecta.php';

	class aEventos extends dbconecta{
		private $cod_trabalho;
		private $cod_area;
		
		//Sets
		public function setCodArea($codigo){
			$this->cod_area = $codigo;
		}

		public function setCodTrabalho($codigo){
			$this->cod_trabalho = $codigo;
		}

		//Gets
		public function getCodArea($codigo){
			return $this->cod_area;
		}

		public function getCodTrabalho($codigo){
			return $this->cod_trabalho;
		}
	}
 ?>