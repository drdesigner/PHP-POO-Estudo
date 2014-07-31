<?php 
	require_once 'db/dbconecta.php';

	class aAreas extends dbconecta{
		private $cod_area;
		private $nome_area;

		public function setCodArea($codigo){
			$this->cod_area = $codigo;
		}

		public function setNomeArea($nome){
			$this->nome_area = $nome;
		}

		public function getCodArea($codigo){
			return $this->cod_area;
		}

		public function getNomeArea($nome){
			return $this->nome_area;
		}
	}
 ?>