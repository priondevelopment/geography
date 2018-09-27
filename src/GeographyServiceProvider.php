<?php

namespace Geography;

/**
 * This file is part of Geography
 *
 * @license MIT
 * @company Prion Development
 * @package Geography
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
    protected $defer = true;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'Config' => 'command.geography.config',
    ];

    /**
     * The middlewares to be registered.
     *
     * @var array
     */
    protected $middlewares = [];

    protected $cache;
    protected $cacheTag = 'geography_cache';

    public function __construct($app)
    {
        $this->app = $app;
        $this->cache = app()->make('cache')
            ->tags($this->cacheTag);
    }


    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $publishes = [];
        $countries = $this->countryIso();

        foreach ($countries as $country) {
            $path = __DIR__ . '/config/geography/' . $country . '.php';
            $app_path = app()->basePath('config/geography/' . $country . '.php');
            $publishes[$path] = $app_path;
        }

        // Register published configuration.
        $this->publishes($publishes, 'geography');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerGeography();

        $this->registerCommands();

        $this->mergeConfig();

        $this->countriesCache();
    }


    /**
     * Defer Loading Geography
     *
     * @return array
     */
    public function provides()
    {
        return ['geography'];
    }


    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerGeography()
    {
        $this->app->bind('geography', function ($app) {
            return new Geography($app);
        });

        $this->app->alias('geography', 'Geography\Geography');
    }

    /**
     * Merges Geography Config Settings
     *
     * @return void
     */
    private function mergeConfig()
    {
        $countries = $this->countryIso();
        $this->app->configure('priongeography');

        $this->mergeConfigFrom(
            __DIR__ . '/config/priongeography.php',
            'priongeography'
        );
    }


    /**
     * Place a List of Countries in the Cache
     *
     */
    public function countriesCache()
    {
        if (!config('priongeography.use_cache')) {
            return $this->allCountries();
        }

        $ttl = config('priongeography.cache_ttl', 60*24);
        $cacheKey = 'country_all';

        $this->cache->remember($cacheKey, $ttl, function () {
            return $this->allCountries();
        });
    }


    /**
     * Pull All Country Data
     *
     * @return mixed
     */
    private function allCountries()
    {
        $countries = [];
        $isos = $this->countryIso();
        foreach ($isos as $iso) {
            $path = __DIR__ . '/config/geography/' . $iso . '.php';
            $countries[$iso] = require $path;
        }

        return $countries;
    }


    /**
     * Find All File Names in Directory
     *
     */
    private function countryIso()
    {
        $cacheKey = 'country_abbrs';
        $ttl = config('priongeography.cache_ttl', 60*24);

        return $this->cache->remember($cacheKey, $ttl, function () {
            $countries = scandir(__DIR__.'/config/geography');
            $countries = str_replace(".php", "", $countries);
            unset($countries[0]);
            unset($countries[1]);

            return $countries;
        });
    }


    /**
     * Register the given commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        foreach (array_keys($this->commands) as $command) {
            $method = "register{$command}Command";

            call_user_func_array([$this, $method], []);
        }

        $this->commands(array_values($this->commands));
    }


    /**
     * Bind the Error Config Setup Command
     *
     */
    protected function registerConfigCommand()
    {
        $command = $this->commands['Config'];
        $this->app->singleton($command, function () {
            return new \Geography\Commands\ConfigCommand;
        });
    }

}