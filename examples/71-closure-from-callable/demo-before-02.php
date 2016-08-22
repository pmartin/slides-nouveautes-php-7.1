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


// Pas d'erreur levée par PHP ici, alors que c'est sur cette ligne
// qu'on a fait une typo !
$callable = [new MaClasse(42), 'maMehtode'];


// Pas non plus d'erreur ici
call_callable($callable);


function call_callable($callable)
{
    // C'est seulement ici qu'on a une erreur !
    // Fatal error: Uncaught Error: Call to undefined method MaClasse::maMehtode()
    $callable();
}
