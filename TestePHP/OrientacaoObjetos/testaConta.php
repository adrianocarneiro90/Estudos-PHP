<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
// $variavel é uma REFERENCIA ao ENDEREÇO da conta que foi estanciado
// $variavel não guarda o valor da conta,ela aponta '->' para a referencia criada
// new Conta() cria um objeto e devolve a referencia (endereço) dele através da $variavel

$primeiraConta->saldo = 200;
$primeiraConta->cpf = '123.456.789-10';
$primeiraConta->nome = 'Vinicius Dias';
//var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->cpf = '321.654.987.01';
$segundaConta->nome = 'Patricia Dias';
$segundaConta->saldo = 1000;
//var_dump($segundaConta);

$terceiraConta = new Conta();
$terceiraConta->saldo = 400;
$terceiraConta->sacar(200);
var_dump($terceiraConta);


$quartaConta = new Conta();
$quartaConta->depositar(100);
var_dump($quartaConta);

echo "--------------" . PHP_EOL;
$terceiraConta->transferir(100, $quartaConta);
var_dump($terceiraConta);
var_dump($quartaConta);


