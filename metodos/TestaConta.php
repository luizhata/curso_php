<?php

  require_once('Conta.php');

  $conta = new Conta(9201);

  // chamada do metodo
  $conta->deposita(700);
  echo "Número da Conta: $conta->numero <br>";
  echo "Saldo: $conta->saldo <br>";

  $resultado = $conta->saca(800);
  var_dump($resultado);

  if ($resultado){
    echo "Saque efetuado com sucesso.<br><br>";
  } else {
    echo "Saldo insuficiente! Vá trabalhar e ganhar mais dinheiro.<br><br>";
  }

  $conta->deposita(9000);
  echo "Saldo: $conta->saldo <br>";

  $resultado = $conta->saca(800);
  var_dump($resultado);

  if ($resultado){
    echo "Saque efetuado com sucesso.<br><br>";
  } else {
    echo "Saldo insuficiente! Vá trabalhar e ganhar mais dinheiro.<br><br>";
  }

  $saldo = $conta->consultaSaldo();
  echo "Saldo Consultado: $saldo <br>";

  $extrato = $conta->imprimeExtrato();
  echo "Extrato da conta:<br> $extrato";

 ?>
