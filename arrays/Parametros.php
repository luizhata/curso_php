<?php
// Exercicio 1:
  echo "<b>***** Exercicio 1: *****</b><br>";
  echo "Inicializando vetor...";
  $vetor = array( 1, 2, 3, 4);
  var_dump($vetor);
  echo "Realizando sort...<br>";
  arsort($vetor);
  echo "Resultado:";
  var_dump($vetor);

// Exercicio 2:
  echo "<br><b>***** Exercicio 2: *****</b><br>";
  echo "Inicializando vetor...";
  $vetor = array( 2, 3, 4, 5);
  var_dump($vetor);
  $newArray = array();
  echo "Realizando multiplicacao...<br>";
  for ($i=0; $i<count($vetor);$i++){
      $prod = 1;
      for ($j=0; $j<count($vetor); $j++){
        if ($j != $i){
          $prod *= $vetor[$j];
        }
      }
      $newArray[$i] = $prod;
  }
  echo "Resultado:<br>";
  var_dump($newArray);
?>
