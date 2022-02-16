<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$primeiraConta->setCpfTitular('123.456.789-10');
$primeiraConta->setNomeTitular('Adriano carneiro');

echo $primeiraConta->getSaldo() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getNomeTitular() . PHP_EOL;
