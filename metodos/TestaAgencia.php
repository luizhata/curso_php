<?php

  require_once('Agencia.php');

  $agencia = new Agencia(1234);
  $agencia2 = new Agencia(5678);

  echo "Número da Agência:<br> $agencia->numero <br><br>";
  echo "Número da Agência2:<br> $agencia2->numero <br><br>";

 ?>
