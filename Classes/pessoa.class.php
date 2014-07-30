<?php 
	Class Pessoa {
	 
	   public $nome;
	   public $altura;
	   public $nascimento;
	   public $salario;

	// Agora abaixo será criado um método para a classe Pessoa, que trabalhará com as propriedades do objeto. 
	// O método terá o nome MostrarPessoa() e basicamente servirá para mostrar os dados do objeto.
	// Lembre-se que método age dentro do escopo da classe.
	
		public function MostrarPessoa(){
			echo "Nome: ".$this->nome."<br/>";
			echo "Altura: ".$this->altura."<br/>";
			echo "Nascimento: ".$this->nascimento."<br/>";
			echo "Salario: ".$this->salario."<br/>";
		} 

	// Temos um novo conceito apresentado acima. 
	// Trata-se da pseudo-variável $this, que serve basicamente para diferenciar as propriedades do objeto de variáveis locais.
	// Lembre-se, $this referencia o objeto ATUAL e acessa suas propriedades.

	}
 ?>