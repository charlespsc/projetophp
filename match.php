<?php

abstract class Question {}
class Single extends Question {}
class Multiple extends Question {}

$input = 'multiple';

// Agora podemos usar o MATCH:

$question = match ($input) {
    'single' => new Single(),
    'multi', 'multiple' => new Multiple() // mais de uma expressão
};

var_dump($question);

/* Antes usavamos o SWITCH:

switch ($input) {
    case 'single':
        $question = new Single();
        break;
    case 'multi':
        $question = new Multiple();
        break;
    default:
        throw new Exception('Invalid question type');
}

var_dump($question);

*/