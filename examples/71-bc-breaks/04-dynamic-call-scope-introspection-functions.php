<?php

function my_function()
{
    $vars = [
        'a' => 123,
        'plop' => 'Hello',
    ];

    $func = 'extract';
    call_user_func($func, $vars);

    var_dump($a, $plop);
}

my_function();

/*
PHP 7.1
    Warning: Cannot call extract() dynamically in .../04-dynamic-call-scope-introspection-functions.php on line 11
    NULL
    NULL

PHP 7.0
    int(123)
    string(5) "Hello"

*/
