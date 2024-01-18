<?php
/* Criar uma lista com 15 números
echo "#1" . PHP_EOL;
echo "#2" . PHP_EOL;
echo "#3" . PHP_EOL;
...
echo "#15" . PHP_EOL;
*/
// Maneira correta!

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}
