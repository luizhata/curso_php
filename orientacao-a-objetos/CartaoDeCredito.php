<?php

  class CartaoDeCredito {
    public $numero;
    public $dataDeValidade;
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
  echo "Validade: $cartao2->dataDeValidade <br>";

 ?>
