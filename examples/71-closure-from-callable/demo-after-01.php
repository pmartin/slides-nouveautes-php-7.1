<?php

function ma_fonction($param)
{
    printf("%s(%s)\n", __FUNCTION__, $param);
}

// L'erreur est immédiatement détectée
// Fatal error: Uncaught TypeError: Failed to create closure from callable: function 'ma_fonctlon' not found or invalid function name
$callable = Closure::fromCallable('ma_fonctlon');

// Ici, de nombreuses lignes de code
// et encore plein d'autres

// Pas de problème ici : $callable est forcément valide
call_user_func($callable, 42);
