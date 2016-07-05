<?php

function fonc01(?int $a) {
    var_dump($a);
}

fonc01(100); // int(100)
fonc01(null); // NULL

fonc01();
// Uncaught Error: Too few arguments to function fonc01(), 0 passed
