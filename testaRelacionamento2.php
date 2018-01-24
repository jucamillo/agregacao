<?php


      require 'conta.php';
      require 'agencia.php';


      $conta->ag = $agencia;

      echo "Agência: {$conta->ag->numero}" . PHP_EOL;
      echo "Conta: $conta->numero" . PHP_EOL;
      echo "Saldo: $conta->saldo" . PHP_EOL;
      echo "Limite: $conta->limite" . PHP_EOL;
