<?php

function fonc02(?int $a, ?int $b) : ?int {
    if ($a === null || $b === null) {
        return null;
    }
    return $a + $b;
}

var_dump( fonc02(10, 20) ); // int(30)
var_dump( fonc02(10, null) ); // NULL
