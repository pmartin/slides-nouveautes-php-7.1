<?php
// Avec une type-declaration non-nullable
// -> On ne pouvait faire que ça, en PHP 7.0

function fonc01(int $a) {
    var_dump($a);
}

fonc01(100); // int(100)
fonc01(null); // TypeError: Argument 1 passed to fonc01() must be of the type integer, null given
