<?php

$idade = 17;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

// == é para dizer que é igual
// || <=> or é para dizer OU
// && <=> and  é para usar E

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar!';
}

echo "Você só tem $idade anos. Você não pode entrar!";
