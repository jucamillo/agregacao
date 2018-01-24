<?php


      require 'lib/Carbon.php';
      use Carbon\Carbon;

class aluno
{
  public $nome; //atributo
  public $dataDeNascimento; //atributo
  public $rg; //atributo
  public $turma; //atributo
}


$aluno = new aluno();
$aluno->nome = "Lorem Ipsum";
$aluno->dataDeNascimento = Carbon::createFromDate(1940, 5, 21, 'America/Sao_Paulo');
$aluno->rg = 333333333;
