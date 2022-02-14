<?php

function exibeMensagem(String $mensagem)
{ //subrotina executa de forma isolada, nao devolve valor
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorAsacar): array
{
    if ($valorAsacar > $conta['saldo']) {
    } else {
        $conta['saldo'] -= $valorAsacar;
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

function titularComLetrasMaiuscculas(array &$conta)
{ // '&' - passar por referencia (não a copia)
    $conta['titular'] = mb_strtoupper($conta['titular']);
    echo $conta['titular'] . PHP_EOL;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}
