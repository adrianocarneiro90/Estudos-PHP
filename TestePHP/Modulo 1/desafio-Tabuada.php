<?php

// exibir a tabuada de qualquer$i

$num = 9;

for ($i = 0; $i <= 10; $i++){
    $resultado = $num * $i;
    echo "$num x $i = $resultado" . PHP_EOL;
}