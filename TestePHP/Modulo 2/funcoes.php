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