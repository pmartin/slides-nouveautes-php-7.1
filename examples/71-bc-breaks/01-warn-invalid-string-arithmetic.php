<?php
error_reporting(E_ALL);

var_dump('10' + '5');
// int(15)

var_dump('10 apples' + '5 oranges');
// Notice: A non well formed numeric value encountered in .../01-warn-invalid-string-arithmetic.php on line 7
// Notice: A non well formed numeric value encountered in .../01-warn-invalid-string-arithmetic.php on line 7
// int(15)

var_dump(10 + "plop");
// Warning: A non-numeric value encountered in .../01-warn-invalid-string-arithmetic.php on line 12
// int(10)
