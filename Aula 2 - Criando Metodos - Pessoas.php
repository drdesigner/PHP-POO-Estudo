<!-- 
Exemplo de Métodos

Veremos também na prática os métodos de inicialização (construtor) e finalização (destrutor).

Criar métodos para suas classes
Entender melhor a criação dos objetos
Entender o método construtor e destrutor

-->

<?php
	
	//incluindo a classe que criada na pasta "Classes"
	include("Classes/pessoa.class.php");

	//Instanciando um novo objeto (p1)
	$p1 = new Pessoa();

	//Atribuindo valores aos atributos
	$p1->nome 		= "Douglas Ribeiro";
	$p1->altura 	= 1.86;
	$p1->nascimento = "1999-01-22";
	$p1->salario 	= 650;

	//Imprimindo valores inseridos no objeto (p1) usando echo
	echo "Nome: ".$p1->nome."<br/>
		Altura: ".$p1->altura."<br/>
	Nascimento: ".$p1->nascimento."<br/>
	   Salario: ".$p1->salario."<br/><br/><hr><br/>";

	//Agora vamos imprimir os 2 objetos (p1 e p2) usando o método
	//Para isso é preciso criar o (p2) que ainda não foi criado

	//Instanciando um novo objeto (p2)
	$p2 = new Pessoa();

	//Atribuindo valores aos atributos
	$p2->nome 		= "Mariana Ribeiro";
	$p2->altura 	= 1.65;
	$p2->nascimento = "1989-01-22";
	$p2->salario 	= 720;
	
	//Imprimindo valores inseridos no objeto (p1 e p2) usando método
	//Observe que você executa o mesmo método MostrarPessoa() para exibir os dados
	echo "Abaixo um exemplo pratico do uso de metodos: <br/><br/>";
	$p1->MostrarPessoa();
	echo "<br/><br/>";
	$p2->MostrarPessoa();

 ?>