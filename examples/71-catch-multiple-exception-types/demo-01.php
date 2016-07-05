<?php

class Plop extends Exception {}
class Blah extends Exception {}
class Another extends Exception {}

try {
    switch (mt_rand(0, 2)) {
        case 0: throw new Plop();
        case 1: throw new Blah();
        case 2: throw new Another();
    }
}
catch (Plop | Blah $e) {
    printf("1er catch : %s\n", get_class($e));
}
catch (Another $e) {
    printf("2nd catch : %s\n", get_class($e));
}
