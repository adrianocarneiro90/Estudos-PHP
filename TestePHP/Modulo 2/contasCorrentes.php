<?php

// arrays associativos
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Adriano',
    'saldo' => 2000
];
$conta3 = [
    'titular' => 'Livia',
    'saldo' => 3000
];

$contasCorrente = [$conta1, $conta2, $conta3];

echo 'Numero de contas: ' . count($contasCorrente) . PHP_EOL;

for ($i = 0; $i < count($contasCorrente); $i++){
    echo $contasCorrente[$i]['titular'] . PHP_EOL;
}

