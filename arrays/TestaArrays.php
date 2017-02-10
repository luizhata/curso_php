<?php

  $cursos = array();

  $cursos[] = "Lógica";
  $cursos[] = "HTML";

  $cursosIni = array("Python", "Ruby", "Teste");

  var_dump($cursos);

  for ($i=0; $i < count($cursos); $i++) {
    echo "Curso: $cursos[$i] <br><br>";
  }

  foreach ($cursos as $x => $valor) {
    echo "Chave: $x, Valor: $valor <br>";
  }

 ?>
