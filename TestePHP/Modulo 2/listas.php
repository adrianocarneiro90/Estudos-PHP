<?php

$idadesList = [21, 23, 19, 25, 30, 41, 18, 29, 3, 60];

$idadesList [] = 32; // se nao informar o indicie, ira adicionar no proximo.

foreach ($idadesList as $idade){
    echo $idade . PHP_EOL;
}

echo PHP_EOL;
echo count($idadesList);
