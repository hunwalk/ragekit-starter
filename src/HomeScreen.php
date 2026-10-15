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
    public string $name = '';

    public static function template(): string
    {
        return 'templates/HomeScreen.rk';
    }

    /** Computed values are methods too: the template reads them like properties. */
    public function greeting(): string
    {
        return $this->name === '' ? 'Type your name above' : 'Hello, ' . $this->name . '!';
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
