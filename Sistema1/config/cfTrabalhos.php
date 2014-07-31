<?php 
	class cfTrabalhos {

		//Converter data formato USA em formato Brasileiro
		public function dateToBR($dataAmericana){
			$d = explode('-',$dataAmericana);
			$dOK = $d[2].'/'.$d[1].'/'.$d[0];
			return $dOK;
		}

		//Converter data formato BR em formato Americana
		public function dateToUS($dataBrasil){
			$d = explode('/',$dataBrasil);
			$dOK = $d[2].'-'.$d[1].'-'.$d[0];
			return $dOK;
		}

		//Converter data formato USA em formato Brasileiro
		public function dateTimeToBR($data_americana_his){
			$d  = explode(' ',$data_americana_his);
			$ok = $this->dateToBR($d[0]).' '.$d[1];
			return $ok;
		}

		//Converter data formato BR em formato Americana
		public function dateTimeToUS($data_br_his){
			$d  = explode(' ',$data_br_his);
			$ok = $this->dateToUS($d[0]).' '.$d[1];
			return $ok;
		}
	}
 ?>