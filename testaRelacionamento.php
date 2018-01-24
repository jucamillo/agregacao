<?php


      require 'cartaoDeCredito.php';
      require 'cliente.php';


      $cartao->dono = $cliente;

      echo "Cartão: $cartao->numero" . PHP_EOL;
      echo "Data de Validade: $cartao->dataDeValidade" . PHP_EOL;
      echo "Dono deste cartao: {$cartao->dono->nome}" . PHP_EOL;
      echo "Cod. dono deste cartao: {$cartao->dono->codigo}" . PHP_EOL;
