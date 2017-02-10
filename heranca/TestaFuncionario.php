<?php

  require_once('Funcionario.php');
  require_once('Gerente.php');
  require_once('Secretario.php');
  require_once('Telefonista.php');

  $gerente = new Gerente;
  $gerente->nome = "Serjão Matador de Onça";
  $gerente->salario = 42354335;
  $gerente->senha = 42354335;

  $secretario = new Secretario;
  $secretario->nome = "Serjão Secretario";
  $secretario->salario = 1234;
  $secretario->ramal = 765432;

  $telefonista = new Telefonista;
  $telefonista->nome = "Serjão Telefonista";
  $telefonista->salario = 8;
  $telefonista->ramal = 765432;

  echo "Gerente:<br>";
  echo "Nome do funcionario: $gerente->nome <br>";
  echo "Salário: $gerente->salario <br>";
  echo "Senha: $gerente->senha <br>";
  echo "Bonificação: {$gerente->calculaBonificacao()} <br><br>";

  echo "Secretario:<br>";
  echo "Nome do funcionario: $secretario->nome <br>";
  echo "Salário: $secretario->salario <br>";
  echo "Ramal: $secretario->ramal <br>";
  echo "Bonificação: {$secretario->calculaBonificacao()} <br><br>";

  echo "Telefonista:<br>";
  echo "Nome do funcionario: $telefonista->nome <br>";
  echo "Salário: $telefonista->salario <br>";
  echo "Estação de Trabalho: $telefonista->estacaoDeTrabalho <br>";
  echo "Bonificação: {$telefonista->calculaBonificacao()} <br><br>";

 ?>
