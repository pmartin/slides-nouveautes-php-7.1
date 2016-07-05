<?php

function mon_generateur() {
    yield 100;
    yield 200;
    yield 300;
}

function fonc01(iterable $data) {
    foreach ($data as $key => $val) {
        var_dump($val);
        // ...
    }
}

fonc01([10, 20, 30]);
fonc01(new SplFixedArray(5));
fonc01(mon_generateur());

fonc01("plop");
// TypeError: Argument 1 passed to fonc01() must be iterable, string given
