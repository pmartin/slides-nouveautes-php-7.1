<?php
// RFC acceptée mais pas implémentée (2016-07-05)
// Parse error: syntax error, unexpected '='

$var1 = $var1 ?? 'default';
var_dump($var1);

$var2 ??= 'default';
var_dump($var2);

$var3 = 'hello';
$var3 ??= 'default';
var_dump($var3);
