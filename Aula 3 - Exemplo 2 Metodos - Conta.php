

<?php 
	//Atribuindo a classe criada
	include("Classes/conta.class.php");

	//criando o objeto conta
	$conta1 = new Conta();
	 
	//setando seus atributos
	$conta1->Cliente = "Douglas Ribeiro";
	$conta1->Agencia = 3192;
	$conta1->Conta   = "1234567-01";
	$conta1->Saldo   = 1000;
	 
	//executando os métodos
	$conta1->Depositar(200);
	$conta1->sacar(10);

	//Imprimindo o valor do saldo
	echo $conta1->ObterSaldo();

 ?>