<?php

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}
echo "---------- while" . PHP_EOL;

for ($contador = 1; $contador <= 15; $contador++) { // $contador = $contador + 1
    echo "#$contador" . PHP_EOL;
}
echo "---------- for" . PHP_EOL;

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        break; // continue = pula o atributo / break - para quando chega no atributo
    }
    echo "#$contador" . PHP_EOL;
}
echo "---------- break or continue" . PHP_EOL;
