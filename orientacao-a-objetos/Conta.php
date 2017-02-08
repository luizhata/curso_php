<?php

  class Conta {
    public $numero;
    public $saldo;
    public $limite;
    public $dono;
    public $agencia;
  }

  $conta = new Conta;
  $conta->numero = 123;
  $conta->saldo = 550;
  $conta->limite = 99999;

  echo "Número da conta: $conta->numero <br>";
  echo "Saldo: $conta->saldo <br>";
  echo "Limite: $conta->limite <br>";

  class Cliente {
    public $nome;
  }

  $cliente1 = new Cliente;
  $cliente1->nome = "Joao das Neves";

  var_dump($conta->dono); // numfmt_get_locale

  $conta->dono = $cliente1;

  echo "Nome do Dono: {$conta->dono->nome} <br>";

  class Agencia {
    public $numero;
  }

  $agencia = new agencia;
  $agencia->numero = 3456;

  $conta->agencia = $agencia;

  echo "Número da agencia: {$conta->agencia->numero} <br><br>";

 ?>
