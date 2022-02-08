<?php

// calcular o IMC declarado - abaixo, dentro, acima do nivel recomendado (altura x peso)

$altura = 1.80;
$peso = 60.0;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Seu IMC é: $imc" . PHP_EOL;
    echo "Ele esta ABAIXO do nivel recomendado.";
} else if ($imc > 18.5 && $imc < 25.0) {
    echo "Seu IMC é: $imc" . PHP_EOL;
    echo "Ele esta NO NIVEL recomendado.";
} else {
    echo "Seu IMC é: $imc" . PHP_EOL;
    echo "Ele esta ACIMA do nivel recomendado.";
}
