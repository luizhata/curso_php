<?php

  // Para nao precisar criar o Cliente novamente
  require_once('Cliente.php');
  //spl_autoload_register();

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

  $cliente1 = new Cliente;
  $cliente1->nome = "Joao das Neves";
  $cliente1->codigo = "987";

  var_dump($conta->dono); // numfmt_get_locale

  $conta->dono = $cliente1;

  echo "Nome do Dono: {$conta->dono->nome} <br>";
  echo "Código do Dono: {$conta->dono->codigo} <br>";

  class Agencia {
    public $numero;
  }

  $agencia = new agencia;
  $agencia->numero = 3456;

  $conta->agencia = $agencia;

  echo "Número da agencia: {$conta->agencia->numero} <br><br>";

 ?>
