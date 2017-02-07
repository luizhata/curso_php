<?php

  class Conta {
    public $numero;
    public $saldo;
    public $limite;
  }

  $conta = new Conta;
  $conta->numero = 123;
  $conta->saldo = 550;
  $conta->limite = 99999;

  echo "Número da conta: $conta->numero <br>";
  echo "Saldo: $conta->saldo <br>";
  echo "Limite: $conta->limite <br>";

 ?>
