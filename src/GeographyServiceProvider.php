<?php

namespace Geography;

/**
 * This file is part of Laratrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Laratrust
 */

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class GeographyServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * The middlewares to be registered.
     *
     * @var array
     */
    protected $middlewares = [];

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

}
