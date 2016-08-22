<?php

class MaClasse
{
    protected $data;

    public function __construct($param)
    {
        $this->data = $param;
    }

    public function maMethode()
    {
        printf("%s() -> %s\n", __METHOD__, $this->data);
    }
}


// L'erreur est immédiatement détectée
// Fatal error: Uncaught TypeError: Failed to create closure from callable: class 'MaClasse' does not have a method 'maMehtode'
$callable = Closure::fromCallable([new MaClasse(42), 'maMehtode']);


// Pas de problème ici : $callable est forcément valide
call_callable($callable);


// Bonus : on peut type-declarer
function call_callable(callable $callable)
{
    $callable();
}
