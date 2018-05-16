<?php

namespace Arkitecht\B2B\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class B2BFacade extends Facade
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
