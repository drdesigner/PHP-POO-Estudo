<!-- 
	Aprendendo na prática os métodos de inicialização (construtor) e finalização (destrutor). 
	Classe (conta) modificada acrescentando os metodos citados em (conta2)
-->

<?php 
	//Atribuindo a classe criada
	include("Classes/conta2.class.php");

	/* Criamos o objeto conta em $conta1, e no momento de sua criação 
	enviamos os parâmetros que o construtor precisa para preencher os respectivos atributos. */

	$conta1 = new conta("Douglas Ribeiro", "0731", "987654-21", 400, "ativa");
	 
	//executando os métodos
	$conta1->Depositar(200);
	$conta1->sacar(25);

	//Imprimindo o valor do saldo
	echo 
		"Favorecido: " .$conta1->Cliente. "<br/>
			  Conta: " .$conta1->Conta. "<br/>
				 Ag: " .$conta1->Agencia. "<br/>
			  Saldo: " .$conta1->ObterSaldo()."<br/>";

 ?>