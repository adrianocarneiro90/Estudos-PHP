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

unset($contasCorrente['143.242.342-03']); // função para remover(apagar)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <h1>
        Contas correntes
    </h1>

    <dl>
        <?php foreach ($contasCorrente as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>

</body>

</html>