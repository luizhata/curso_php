<?php

  class Agencia {
    public $numero;
  }

  $agencia = new agencia;
  $agencia->numero = 3456;

  $agencia2 = new agencia;
  $agencia2->numero = 7866;

  echo "Número da agencia: $agencia->numero <br><br>";
  echo "Número da agencia: $agencia2->numero <br>";

 ?>
