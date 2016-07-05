<?php

$array = [
    'glop' => "Hello",
    'plop' => 123456,
    'who' => "World",
];

list (
    'glop' => $a,
    'who' => $b
) = $array;

var_dump($a, $b);
// string(5) "Hello"
// string(5) "World"
