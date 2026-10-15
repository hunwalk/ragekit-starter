<?php

use App\HomeScreen;
use RageKit\App;

/** The program's entry point: open the first window and run until the last one closes. */
function main(): void
{
    $app = new App();
    $app->open(new HomeScreen(), title: 'My RageKit app', width: 380, height: 300);
    $app->run();
}
