<?php

namespace Arkitecht\B2B\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class B2BSoapFacade extends Facade
{
    /**
     * Get the facade
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'b2bsoap';
    }
}
