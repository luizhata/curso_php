<?php

  class Funcionario {
    public $nome;
    public $salario;
  }

  $funcionario1 = new Funcionario;
  $funcionario1->nome = "Serjão Matador de Onça";
  $funcionario1->salario = "4235433435";

  $funcionario2 = new Funcionario;
  $funcionario2->nome = "IBAMA";
  $funcionario2->salario = "323";

  echo "Nome do funcionario: $funcionario1->nome <br>";
  echo "Salário: $funcionario1->salario <br><br>";

  echo "Nome do funcionario: $funcionario2->nome <br>";
  echo "Salário: $funcionario2->salario <br>";

 ?>
