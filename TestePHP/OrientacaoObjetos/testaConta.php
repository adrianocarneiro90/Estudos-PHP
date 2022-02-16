<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

// $variavel é uma REFERENCIA ao ENDEREÇO da conta que foi estanciado
// $variavel não guarda o valor da conta,ela aponta '->' para a referencia criada
// new Conta() cria um objeto e devolve a referencia (endereço) dele através da $variavel

$Patricia = new Titular(new Cpf('321.654.987-01'), 'Patricia Dias');
$conta1 = new Conta($Patricia);
$Vinicius = new Titular(new Cpf('123.456.789-12'), 'Vinicius');
$conta2 = new Conta($Vinicius);

echo $conta1->getNomeTitular() . PHP_EOL;
echo $conta1->getCpfTitular() . PHP_EOL;
echo $conta1->getSaldo() . PHP_EOL;

echo $conta2->getNomeTitular() . PHP_EOL;
echo $conta2->getCpfTitular() . PHP_EOL;
echo $conta2->getSaldo() . PHP_EOL;

echo "Numero de contas: " . Conta::recuperaNumeroDeContas();
