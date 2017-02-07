<?php

  class Turma {
    public $periodo;
    public $serie;
    public $sigla;
    public $tipoDeEnsino;
  }

  $turma1 = new Turma;
  $turma1->periodo = "Tarde";
  $turma1->serie = "9";
  $turma1->sigla = "C";
  $turma1->tipoDeEnsino = "Superior";

  $turma2 = new Turma;
  $turma2->periodo = "Manhã";
  $turma2->serie = "6";
  $turma2->sigla = "A";
  $turma2->tipoDeEnsino = "Fundamental";

  echo "Periodo da turma: $turma1->periodo <br>";
  echo "Serie: $turma1->serie <br>";
  echo "Sigla: $turma1->sigla <br>";
  echo "Ensino: $turma1->tipoDeEnsino <br><br>";

  echo "Periodo da turma: $turma2->periodo <br>";
  echo "Serie: $turma2->serie <br>";
  echo "Sigla: $turma2->sigla <br>";
  echo "Ensino: $turma2->tipoDeEnsino <br><br>";

 ?>
