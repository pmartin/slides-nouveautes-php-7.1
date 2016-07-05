<?php

function fonc01() {
    printf("%s\n", __FUNCTION__);
}

function fonc02() : void {
    printf("%s\n", __FUNCTION__);
}

function function03() : void {
    printf("%s\n", __FUNCTION__);

    // Fatal error: A void function must not return a value
    return 'plop';
}
