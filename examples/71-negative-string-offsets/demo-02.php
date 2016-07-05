<?php

$str = "Pas.al";
$str[-3] = 'c';
var_dump($str);  // string(6) "Pascal"

/*
PHP 7.0
    Warning: Illegal string offset:  -3
*/
