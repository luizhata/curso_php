<?php

  require_once('Funcionario.php');

  class Gerente extends Funcionario{
    public $senha;

    // override
    public function calculaBonificacao(){
      return parent::calculaBonus() + 2 * this-> salario;
    }
  }

 ?>
