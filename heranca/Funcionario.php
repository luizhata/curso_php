<?php

  class Funcionario {
    public $nome;
    public $salario;

    public function calculaBonificacao(){
      return $this->salario * 0.1;
    }
  }

 ?>
