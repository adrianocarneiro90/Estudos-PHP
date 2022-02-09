<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Voce só pode entrar se tiver mais de 18 anos." . PHP_EOL;


if ($idade >= 18) { // 
    echo "Voce tem $idade anos." . PHP_EOL;
    echo 'Pode entrar!';
} else if ($idade >= 16 && $numeroDePessoas > 1) { // and or &&
    echo "Voce tem $idade anos, porem esta acompanhado." . PHP_EOL;
    echo 'Pode entrar!';
} else {
    echo "Sua idade é $idade, menos de 18." . PHP_EOL;
    echo 'Voce NÃO pode entrar!';
}
echo PHP_EOL;
echo "Adeus!";
