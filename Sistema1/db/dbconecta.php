<?php 

	require_once 'config/cfTrabalhos.php';

	class dbconecta extends cfTrabalhos {

		private $user 	  = "root";
		private $pass 	  = "";
		private $host 	  = "localhost";
		private $database = "sistema1";

		private function Connect() {
			$conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass);
			return $conn;
		}

		public function RunQuery($sql) {
			$stm = $this->Connect()->prepare($sql);
			return $stm->execute();
		}

		public function RunSelect($sql) {
			$stm = $this->Connect()->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}
		
	}
 ?>
