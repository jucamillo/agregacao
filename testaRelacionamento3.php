<?php


      require 'aluno.php';
      require 'turma.php';


      $aluno->turma = $turma;
      echo "Nome do aluno: $aluno->nome" . PHP_EOL;
      echo "Data de Nascimento: $aluno->dataDeNascimento" . PHP_EOL;
      echo "RG: $aluno->rg" . PHP_EOL;
      echo "Turma: {$aluno->turma->sigla}" . PHP_EOL;
      echo "Periodo: {$aluno->turma->periodo}" . PHP_EOL;
      echo "Serie: {$aluno->turma->serie}" . PHP_EOL;
      echo "Tipo de ensino: {$aluno->turma->tipo}" . PHP_EOL;
