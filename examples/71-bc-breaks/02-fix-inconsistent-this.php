<?php

class MaClasse
{
    public function method()
    {
        $var = 'this';
        $$var = "plop !";
        var_dump($this);
        $this->otherMethod();
    }

    public function otherMethod()
    {
        var_dump(__METHOD__);
    }
}

$obj = new MaClasse();
$obj->method();

/*
PHP 7.1
    Fatal error: Uncaught Error: Cannot re-assign $this in .../02-fix-inconsistent-this.php:8

PHP 7.0
    string(6) "plop !"
    string(21) "MaClasse::otherMethod"
*/
