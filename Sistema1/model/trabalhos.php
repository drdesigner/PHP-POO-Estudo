<?php 
	require_once 'db/dbconecta.php';

	class aEventos extends dbconecta{
		private $cod_trabalho;
		private $titulo;
		private $resumo;
		private $palavras_chaves;
		private $arquivo;
		private $data_cad;		
		private $referencias;
		private $hipotese;
		private $metodologia;
		private $objetivo;
		private $resultado;

		//Sets
		public function setCodTrabalho($codigo){
			$this->cod_trabalho = $codigo;
		}

		public function setTitulo($topico){
			$this->titulo = $topico;
		}

		public function setResumo($breve){
			$this->resumo = $breve;
		}

		public function setPalavrasChaves($tags){
			$this->palavras_chaves = $tags;
		}

		public function setArquivo($archive){
			$this->arquivo = $archive;
		}

		public function setDataCadastro($dateBR_his){
			$this->data_cad = $this->dateTimeToUS($dateBR_his);
		}

		public function setReferencias($refer){
			$this->referencias = $refer;
		}

		public function setHipotese($hipo){
			$this->hipotese = $hipo;
		}

		public function setMetodologia($metodo){
			$this->metodologia = $metodo;
		}

		public function setObjetivo($hipo){
			$this->hipotese = $hipo;
		}

		public function setResultado($metodo){
			$this->metodologia = $metodo;
		}

		//Gets
		public function getCodTrabalho($codigo){
			return $this->cod_trabalho;
		}

		public function getTitulo($topico){
			return $this->titulo;
		}

		public function getResumo($breve){
			return $this->resumo;
		}

		public function getPalavrasChaves($tags){
			return $this->palavras_chaves;
		}

		public function getArquivo($archive){
			return $this->arquivo;
		}

		public function getDataCadastro($date){
			return $this->data_cad;
		}

		public function getReferencias($refer){
			return $this->referencias ;
		}

		public function getHipotese($hipo){
			return $this->hipotese;
		}

		public function getMetodologia($metodo){
			return $this->metodologia;
		}

		public function getObjetivo($hipo){
			return $this->hipotese;
		}

		public function getResultado($metodo){
			return $this->metodologia;
		}
	}
 ?>