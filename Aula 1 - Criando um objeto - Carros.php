<!-- 
Exemplo de Objetos

Um objeto contém exatamente a mesma estrutura e as propriedades de uma classe, 
no entanto sua estrutura é dinâmica, seus atributos podem mudar de valor durante a 
execução do programa e podemos declarar diversos objetos oriundos de uma mesma classe.

-->

<?php
	//incluindo a classe que criada na pasta "Classes"
	include("Classes/carro.class.php");
	 
	//Instanciando um novo objeto
	$carro0 = new carro();
	 
	//Atribuindo valores aos atributos
	$carro0->ano 		= "2012";
	$carro0->modelo 	= "C4 VTR";
	$carro0->cor		= "Preto";
	$carro0->fabricante = "Citroen";
	$carro0->status 	= "Disponivel";

	//Instanciando um novo objeto
	$carro1 = new carro();
	 
	//Atribuindo valores aos atributos
	$carro1->ano 		= "2014 / 2015";
	$carro1->modelo 	= "Corcel 2";
	$carro1->cor		= "Amarelo";
	$carro1->fabricante = "Ford";
	$carro1->status 	= "Indisponivel";


	//Imprimindo na tela do usuário os valores do objeto (carro0) acima:
	echo "Carro ". $carro0->status . ": <br/><br/>"	;

	echo "Fabricante do carro: ". $carro0->fabricante . "<br />
	 	 			   Modelo: ". $carro0->modelo . "<br />
	 	 			   de Cor: ". $carro0->cor . "<br />
	 	 				  Ano: ". $carro0->ano . "<br /> <hr>";


	//Imprimindo na tela do usuário os valores do objeto (carro1) acima:
	echo "Carro ". $carro1->status . ": <br/><br/>"	;

	echo "Fabricante do carro: ". $carro1->fabricante . "<br />
	 	 			   Modelo: ". $carro1->modelo . "<br />
	 	 			   de Cor: ". $carro1->cor . "<br />
	 	 				  Ano: ". $carro1->ano . "<br /> <hr>";
 ?>