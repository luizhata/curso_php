<?php

  class Aluno {
    public $nome;
    public $rg;
    public $dataNascimento;
    public $turma;
  }

  $aluno1 = new Aluno;
  $aluno1->nome = "Serjão Matador de Onça";
  $aluno1->rg = "4235433435";
  $aluno1->dataNascimento = "01/01/1992";

  $aluno2 = new Aluno;
  $aluno2->nome = "IBAMA";
  $aluno2->rg = "453455";
  $aluno2->dataNascimento = "01/12/1935";

  echo "Nome do aluno: $aluno1->nome <br>";
  echo "RG: $aluno1->rg <br>";
  echo "Data de Nascimento: $aluno1->dataNascimento <br><br>";

  echo "Nome do aluno: $aluno2->nome <br>";
  echo "RG: $aluno2->rg <br>";
  echo "Data de Nascimento: $aluno2->dataNascimento <br><br>";

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

  $aluno1->turma = $turma1;

  echo "Periodo da turma: {$aluno1->turma->periodo} <br>";
  echo "Serie: {$aluno1->turma->serie} <br>";
  echo "Sigla: {$aluno1->turma->sigla}<br>";
  echo "Ensino: {$aluno1->turma->tipoDeEnsino} <br><br>";

 ?>
