<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Adriano carneiro'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getSaldo() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getNomeTitular() . PHP_EOL;
