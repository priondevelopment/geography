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
        // Register published configuration.
        $this->publishes([
            __DIR__.'/config/geography/us.php' => config_path('geography/us.php'),
            __DIR__.'/config/geography/ca.php' => config_path('geography/ca.php'),
        ], 'geography');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerGeography();
        $this->mergeConfig();
    }


    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerLaratrust()
    {
        $this->app->bind('geography', function ($app) {
            return new Geography\Geography($app);
        });
        $this->app->alias('geography', 'Geography\Geography');
    }


    /**
     * Merges user's and laratrust's configs.
     *
     * @return void
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/geography/us.php',
            'geography'
        );
        $this->mergeConfigFrom(
            __DIR__.'/config/geography/ca.php',
            'geography'
        );
    }
}