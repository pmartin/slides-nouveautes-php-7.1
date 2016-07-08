<?php

pcntl_async_signals(true);

pcntl_signal(SIGTERM, function ($signo) {
    var_dump("SIGTERM"); die;
});

while (true) {
    usleep(100);
}
