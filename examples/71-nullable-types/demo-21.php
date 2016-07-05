<?php
// Avec type-declaration non-nullable

function fonc02(int $a, $b) : int {
    if ($a === null || $b === null) {
        return null;
    }
    return $a + $b;
}

var_dump( fonc02(10, 20) ); // int(30)
var_dump( fonc02(10, null) ); // TypeError: Return value of fonc02() must be of the type integer, null returned
