<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

// == é para dizer que é igual
// || or é para dizer OU
// && and  é para usar E

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
} else {
        echo "Você só tem $idade anos. Você não pode entrar!";
}

echo PHP_EOL;
echo "Adeus!";