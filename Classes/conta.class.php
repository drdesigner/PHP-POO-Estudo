<!-- 
  Vamos agora modelar uma classe um pouco mais completa, ela se chamará conta.
  Ela terá os métodos Sacar, Depositar e ObterSaldo.
  
  Observe que o método Depositar e o método Sacar recebem valores e esses são atribuidos as variáveis do objeto.
  O método ObterSaldo não recebe nenhum valor, ele apenas retorna (return) o valor atual da variável $saldo.
-->

<?php
   class Conta{
   
      public $Cliente;
      public $Agencia;
      public $Conta;
      public $Saldo;  
      public $Status;
      
      /* Método Sacar() Diminui o saldo em quantia */
      function Sacar($quantia){

         if( $quantia > 0 ){
            $this->Saldo -= $quantia;
         }
      }

      /* Método Depositar() Deposita uma quantia, acrescendo o saldo */
      function Depositar($quantia){
         if ( $quantia > 0 ){
            $this->Saldo += $quantia;
         }
      }

      /* Método ObterSaldo() Retorna o saldo da conta */
      function ObterSaldo(){
         return $this->Saldo;
      }
      }
?>