<?php

function calculaImc(float $imc)

{
  $lista  = [
    '18.5' => 'Magreza',
    '24.9' => 'Saudável',
    '29.9' => 'Sobrepeso',
    '34.9' => 'Obesidade Grau I',
    '39.9' => 'Obesidade Grau II',
    '40.0' => 'Obesidade Grau III'
  ];

  foreach ($lista as $posicao => $classificacao) :
    if ($posicao < '40.0') {
      if ($imc <= $posicao) {
        echo "Atençao, seu IMC é " . number_format($imc, 2) . ", e você  está classificado como $classificacao" . PHP_EOL;
        break;
      }
    } else {
      echo "Atençao, seu IMC é " . number_format($imc, 2) . ", e você  está classificado como $classificacao" . PHP_EOL;
    }
  endforeach;
}

calculaImc(18.0);
calculaImc(24.9);
calculaImc(29.9);
calculaImc(34.9);
calculaImc(39.9);
calculaImc(41.0);
