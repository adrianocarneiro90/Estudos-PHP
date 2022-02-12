<?php

require_once 'funcoes.php'; 
// require para a execução se não encontrar o arquivo 
// include lança um aviso e continua a execução

$contasCorrente = [
    '312.312.312-12' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '143.242.342-03' =>   [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '212.312.312-23' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrente['312.312.312-12'] = sacar(
    $contasCorrente['312.312.312-12'],
    500
);

$contasCorrente['143.242.342-03'] = sacar(
    $contasCorrente['143.242.342-03'],
    500
);

$contasCorrente['212.312.312-23'] = depositar(
    $contasCorrente['212.312.312-23'],
    300
);

foreach ($contasCorrente as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}
