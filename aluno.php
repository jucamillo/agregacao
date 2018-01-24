<?php
declare(strict_types = 1);
      require 'lib/Carbon.php';
      use Carbon\Carbon;

class aluno
{
  public $nome; //atributo
  public $dataDeNascimento; //atributo
  public $rg; //atributo
  public $turma; //atributo

  //funcao que é chamada sempre que um aluno é criada (construtor)

  //se coloca um parametro dentro de um construtor esse parametro se torna 'obrigatorio', ele nao deixa de criar, ele apenas da um aviso
// so da erro se pedir o tipo, p pedir o tipo tem que add o declare la em cima
  function __construct(string $nome, Carbon $dataDeNascimento)
  {
    $this->nome = $nome;
    $this->dataDeNascimento = $dataDeNascimento;
    echo "Aluno Criado" . PHP_EOL;
  }
}


$aluno = new aluno("Lorem", Carbon::createFromDate(1940, 5, 21, 'America/Sao_Paulo'));
$aluno->rg = 333333333;
