<?php

  require_once('Conta.php');

  Conta::zeraContador();
  echo "Contador Ini: " . Conta::$contador . "<br>";

  $x = new Conta;
  echo "Número da Conta: $x->numero <br>";
  $x->saldo = 600;

  $y = new Conta;
  echo "Número da Conta: $y->numero <br>";
  $y->saldo = 600;

  echo "Contador Final: " . Conta::$contador . "<br>";

  $x->zeraContador();
  echo "Contador após Zera: " . Conta::$contador . "<br>";
 ?>
