<?php

namespace SilhouettePom\Pomweb\Facades;

use Illuminate\Support\Facades\Facade;

class Pomweb extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'pomweb';
    }
}
