<?php

require 'src/Conta.php';

$primeiraConta = new Conta(); 
// $variavel é uma REFERENCIA ao ENDEREÇO da conta que foi estanciado
// $variavel não guarda o valor da conta,ela aponta '->' para a referencia criada
// new Conta() cria um objeto e devolve a referencia (endereço) dele através da $variavel
var_dump($primeiraConta);

$primeiraConta -> saldo = 200;
$primeiraConta -> cpf = '123.456.789-10';
$primeiraConta -> nome = 'Vinicius Dias';
var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta -> cpf = '321.654.987.01';
$segundaConta -> nome = 'Patricia Dias';
$segundaConta -> saldo = 1000;
var_dump($segundaConta); 

echo $primeiraConta -> saldo;
