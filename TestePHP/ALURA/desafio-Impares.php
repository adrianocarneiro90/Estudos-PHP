<?php

// exibir todos os numeros impares até 100

$i = 0;

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        echo $i . PHP_EOL;
    }
}
