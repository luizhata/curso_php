<?php

  class Cliente {
    public $nome;
    public $codigo;
  }

  $cliente1 = new Cliente;
  $cliente1->nome = "Joao das Neves";
  $cliente1->codigo = "987";

  $cliente2 = new Cliente;
  $cliente2->nome = "John Constantine";
  $cliente2->codigo = "666";

  echo "Nome do cliente: $cliente1->nome <br>";
  echo "Código: $cliente1->codigo <br><br>";

  echo "Nome do cliente: $cliente2->nome <br>";
  echo "Código: $cliente2->codigo <br>";

 ?>
