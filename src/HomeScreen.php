<?php

namespace App;

use RageKit\Screen;

/**
 * A screen: public properties are its state, public methods its event handlers. After every
 * event the window shows the new values.
 */
final class HomeScreen extends Screen
{
    public int $count = 0;

    public static function template(): string
    {
        return 'templates/HomeScreen.rk';
    }

    /** Computed values are methods too: the template calls them, e.g. {{ times() }}. */
    public function times(): string
    {
        return $this->count === 1 ? 'once' : $this->count . ' times';
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function reset(): void
    {
        $this->count = 0;
    }
}
