<?php

  require_once('Conta.php');
  require_once('Agencia.php');

  $agencia = new Agencia(3456);

  $conta = new Conta(9201,$agencia);

  echo "Número da agencia: {$conta->agencia->numero} <br><br>";
  echo "Número da Conta: $conta->numero <br>";
  $conta->deposita(9000);
  echo "Saldo: $conta->saldo <br>";

  $agencia->numero = 987;
  echo "Nova Agência: {$conta->agencia->numero} <br>";

 ?>
