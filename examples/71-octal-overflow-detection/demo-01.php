<?php

/*
PHP 7.1 :
    Warning: Octal escape sequence overflow \523 is greater than \377 in .../demo-01.php on line 12
*/

$str = "Un caractère : \123";
var_dump($str);
// string(17) "Un caractère : S"

$str = "Une tentative : \523";
var_dump($str);
// string(17) "Une tentative : S"
