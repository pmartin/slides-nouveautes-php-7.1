<?php

function ma_fonction($param)
{
    printf("%s(%s)\n", __FUNCTION__, $param);
}

// Pas de problème détecté ici
$nom = 'ma_fonctlon';

// Ici, de nombreuses lignes de code
// et encore plein d'autres

// C'est seulement ici qu'on a un problème :
// Warning: call_user_func() expects parameter 1 to be a valid callback, function 'ma_fonctlon' not found or invalid function name
call_user_func($nom, 42);
