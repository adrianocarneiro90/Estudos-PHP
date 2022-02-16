<?php

require 'src/Conta.php';

// $variavel é uma REFERENCIA ao ENDEREÇO da conta que foi estanciado
// $variavel não guarda o valor da conta,ela aponta '->' para a referencia criada
// new Conta() cria um objeto e devolve a referencia (endereço) dele através da $variavel


$conta1 = new Conta('123.456.789-10', 'Vinicius Dias');

$conta2 = new Conta('321.654.987.01', 'Patricia Dias');

var_dump($conta1);
var_dump($conta2);