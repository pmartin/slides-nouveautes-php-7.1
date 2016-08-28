<?php

function my_function($a, $b)
{
    var_dump($a, $b);
}

my_function(10);

/*
PHP 7.1
    Fatal error: Uncaught Error: Too few arguments to function my_function(),
        1 passed in .../03-missing-argument-exception.php on line 8
        and exactly 2 expected in .../03-missing-argument-exception.php:3

PHP 7.0
    Warning: Missing argument 2 for my_function(),
        called in .../03-missing-argument-exception.php on line 9
        and defined in .../03-missing-argument-exception.php on line 3
    int(10)
    NULL
*/
