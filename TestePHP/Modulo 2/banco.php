<?php

function exibeMensagem(String $mensagem)
{ //subrotina executa de forma isolada, nao devolve valor
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorAsacar): array
{
    if ($valorAsacar > $conta['saldo']) {
        exibeMensagem("Não é possivel sacar esse valor!");
    } else {
        $conta['saldo'] -= $valorAsacar;
        exibeMensagem("Valor sacado com sucesso!");
    }
    return $conta;
}
function depositar(array $conta, float $valorAdepositar): array
{
    if ($valorAdepositar > 0) {
        $conta['saldo'] += $valorAdepositar;
    } else {
        exibeMensagem("Deposito precisar ser positivo!");
    }
    return $conta;
}

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
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
