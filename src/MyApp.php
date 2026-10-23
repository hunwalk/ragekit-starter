<?php

namespace App;

use RageKit\RootStore;
use RageKit\Screen;

/**
 * The app: its state (createStore()), its first screen and its main window. Closing the main
 * window ends the app. start() runs once the window is open: the place to react to store events,
 * e.g. `AppStore::get()->profile->on('signedOut', …)`.
 */
final class MyApp extends \RageKit\App
{
    protected function createStore(): RootStore
    {
        return new AppStore();
    }

    protected function firstScreen(): Screen
    {
        return new HomeScreen();
    }

    protected function title(): string
    {
        return 'My RageKit app';
    }

    protected function width(): int
    {
        return 380;
    }

    protected function height(): int
    {
        return 320;
    }
}
