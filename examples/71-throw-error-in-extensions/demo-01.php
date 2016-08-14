<?php

// 'timezone-type' au lieu de 'timezone_type'
$serialized = 'O:8:"DateTime":3:{s:4:"date";s:26:"2016-08-14 12:31:50.000000";s:13:"timezone-type";i:3;s:8:"timezone";s:3:"UTC";}';
$dt = unserialize($serialized);
var_dump($dt);

/*
PHP 7.1
    Fatal error: Uncaught Error: Invalid serialization data for DateTime object in .../demo-01.php:5

PHP 7.0
    Fatal error: Invalid serialization data for DateTime object in .../demo-01.php on line 5
*/
