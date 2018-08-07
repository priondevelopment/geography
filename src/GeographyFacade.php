<?php

namespace Geography;

/**
 * This file is part of Geography,
 * geography data for Laravel.
 *
 * @license MIT
 * @company Prion Development
 * @package Geography
 */

use Illuminate\Support\Facades\Facade;

class GeographyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'geography';
    }
}