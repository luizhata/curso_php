<?php

  require_once('Funcionario.php');

  class Gerente extends Funcionario{
    public $senha;

    public function calculaBonificacao(){
      return $this->salario * 0.6 + 100;
    }
  }

 ?>
