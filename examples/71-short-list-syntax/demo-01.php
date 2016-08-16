<?php

$array = [10, 20, 30];
[$a, $b, $c] = $array;
var_dump($a, $b, $c);
// int(10)
// int(20)
// int(30)

['glop' => $glop, 'plop' => $plop] = [
    'plop' => 42,
    'glop' => "Hello",
];
var_dump($plop, $glop);
// int(42)
// string(5) "Hello"
