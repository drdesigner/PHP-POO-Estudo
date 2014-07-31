<?php 
require 'config/cfTrabalhos.php';
$cf = new cfTrabalhos();

echo($cf->dateToBR("1984-25-05"));
echo("<br/>");
echo($cf->dateToUS("11/12/1985"));
echo("<br/>");
echo($cf->dateTimeToUS("11/12/2011 10:12:15"));
echo("<hr>");
echo($cf->dateTimeToBR("2011-09-11 00:35:41"));

echo("<br><br><hr><br><br>");

require_once 'db/dbconecta.php';
$co = new dbconecta();

$co->RunQuery("insert into areas (nome_area) values ('DOUGLAS')");

	if($co){
		echo "OK!";
	}
	else {
		echo "ERRO!";	
	}

 ?>