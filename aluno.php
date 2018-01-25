<?php
declare(strict_types = 1);
      require 'lib/Carbon.php';
      use Carbon\Carbon;

class aluno
{
  public $nome; //atributo de objeto
  public $dataDeNascimento; //atributo
  public $rg; //atributo
  public $turma; //atributo
  public static $contador = 0; //atributo de classe

  //funcao que é chamada sempre que um aluno é criada (construtor)

  //se coloca um parametro dentro de um construtor esse parametro se torna 'obrigatorio', ele nao deixa de criar, ele apenas da um aviso
// so da erro se pedir o tipo, p pedir o tipo tem que add o declare la em cima
  function __construct(string $nome, Carbon $dataDeNascimento)
  {
    $this->nome = $nome;
    $this->dataDeNascimento = $dataDeNascimento;
    self::$contador++;
    echo "Aluno Criado " . aluno::$contador . PHP_EOL;
  }
}

$aluno = new aluno("Lorem", Carbon::createFromDate(1940, 5, 21, 'America/Sao_Paulo'));
$aluno = new aluno("Ipsum", Carbon::createFromDate(1940, 5, 21, 'America/Sao_Paulo'));
$aluno = new aluno("Dolor", Carbon::createFromDate(1940, 5, 21, 'America/Sao_Paulo'));
$aluno = new aluno("Sit", Carbon::createFromDate(1940, 5, 21, 'America/Sao_Paulo'));
