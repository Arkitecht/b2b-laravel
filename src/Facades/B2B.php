<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class B2B extends Facade
{
    /**
     * Get the facade
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'b2b';
    }
}
