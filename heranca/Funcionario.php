<?php

  class Funcionario {
    public $nome;
    public $salario;
    // constante
    const PORCENTAGEM_DO_BONUS = 0.05;

    public function calculaBonificacao(){
      return $this->salario * SELF::PORCENTAGEM_DO_BONUS;
    }
  }

 ?>
