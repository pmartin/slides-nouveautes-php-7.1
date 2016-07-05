<?php

[$a, $b] = [10, 20];
var_dump($a, $b);
// int(10)
// int(20)

['glop' => $glop, 'plop' => $plop] = [
    'plop' => 42,
    'glop' => "Hello",
];
var_dump($plop, $glop);
// int(42)
// string(5) "Hello"
