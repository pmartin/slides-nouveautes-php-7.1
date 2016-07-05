<?php

function ma_fonction() {
    var_dump(__FUNCTION__);
}

$closure = Closure::fromCallable('ma_fonction');
$closure();  // string(11) "ma_fonction"


$closure = Closure::fromCallable('plop');
// TypeError: Failed to create closure from callable: function 'plop' not found or invalid function name
