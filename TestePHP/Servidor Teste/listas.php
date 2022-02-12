<?php

require_once 'funcoes.php';

$idadesList = [21, 23, 19, 25, 30, 41, 18, 29, 3, 60];

[$idadeVinicius, $idadeJoa, $idadeMaria] = $idadesList; //fução List(0,1,2)
unset($idadesList[4],  $idadesList[5]); // função para remover (apagar)

$idadesList [] = 32; // se nao informar o indice, ira adicionar no proximo.

foreach ($idadesList as $idade){
    exibeMensagem($idade);
}

echo PHP_EOL;
echo count($idadesList);
