<?php 
	require_once 'db/dbconecta.php';

	class aEventos extends dbconecta{
		private $cod_evento;
		private $nome_evento;
		private $data_evento;

		public function setCodEvento($codigo){
			$this->cod_evento = $codigo;
		}

		public function setNomeEvento($nome){
			$this->nome_evento = $nome;
		}

		public function setDataEvento($dataBR){
			$this->data_evento = $this->dateToUS($dataBR);
		}		

		public function getCodArea($codigo){
			return $this->cod_evento;
		}

		public function getNomeArea($nome){
			return $this->nome_evento;
		}

		public function getDataEvento($us=false){
			if($us){
				return $this->data_evento;
			}else{
				return $this->dateToBR($this->data_evento);
			}

		}		
	}
 ?>