<?php

// arrays associativos =/= array numerico

$contasCorrente = [
    '312.312.312.-12' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '143.242.342-03' =>   [
        'titular' => 'Adriano',
        'saldo' => 2000
    ],
    '212.312.312-23' => [
        'titular' => 'Livia',
        'saldo' => 3000
    ]
];

$contasCorrente[] = [
    'titular' => 'Claudia',
    'saldo' => 20000
];
$contasCorrente['123.123.123-02'] = [
    'titular' => 'Claudia2',
    'saldo' => 200002
];

foreach ($contasCorrente as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
