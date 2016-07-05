<?php

class MaClasse {
    public const MA_PUBLIQUE = 42;
    private const MA_PRIVEE = 1234;

    public function test() {
        var_dump( self::MA_PRIVEE );
    }
}

var_dump( MaClasse::MA_PUBLIQUE ); // int(42)
(new MaClasse())->test(); // int(1234)

// Fatal error: Uncaught Error: Cannot access private const MaClasse::MA_PRIVEE
var_dump( MaClasse::MA_PRIVEE );
