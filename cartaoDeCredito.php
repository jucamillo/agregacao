<?php

      require 'lib/Carbon.php';
      use Carbon\Carbon;


class cartaoDeCredito
{
  public $numero; //atributo
  public $dataDeValidade; //atributo
  public $dono; //atributo
}


$cartao = new cartaoDeCredito();
$cartao->numero = 12910290192;
$cartao->dataDeValidade = Carbon::createFromDate(2023, 5, 21, 'America/Sao_Paulo');
