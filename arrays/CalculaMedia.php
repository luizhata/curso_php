<?php

  // php CalculaMedia

  $argv;

  $soma = 0;
  for ($i=1; $i < count($argv); $i++) {
    $soma += $argv[$i];
  }

  echo "Soma dos elementos: " . ($soma/(count($argv) - 1)) . PHP_EOL;

 ?>
