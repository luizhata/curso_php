<?php

  class CartaoDeCredito {
    public $numero;
    public $dataDeValidade;
    public $titular;
  }

  $cartao = new CartaoDeCredito;
  $cartao->numero = 1234324567;
  $cartao->dataDeValidade = 01/01/2020;

  $cartao2 = new CartaoDeCredito;
  $cartao2->numero = 458986543456;
  $cartao2->dataDeValidade = 01/01/2019;

  echo "Número do cartao: $cartao->numero <br>";
  echo "Validade: $cartao->dataDeValidade <br><br>";

  echo "Número do cartao: $cartao2->numero <br>";
  echo "Validade: $cartao2->dataDeValidade <br><br>";

  class Cliente {
    public $nome;
    public $codigo;
  }

  $cliente1 = new Cliente;
  $cliente1->nome = "Joao das Neves";
  $cliente1->codigo = "987";

  $cartao->titular = $cliente1;

  echo "Nome do cliente: {$cartao->titular->nome} <br>";
  echo "Código: {$cartao->titular->codigo} <br><br>";

 ?>
