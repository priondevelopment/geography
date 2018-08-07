<?php

namespace Geography;

class Geography
{

    /**
     * Laravel application.
     *
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * The Country Code
     *
     * @var
     */
    protected $code;

    protected $cache;
    protected $cacheTag = 'geography_cache';

    protected $countries;
    protected $allData;

    /**
     * Create a new confide instance.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
        $this->cache = app()->make('cache')
            ->tags($this->cacheTag);
    }


    /**
     * List of Countries
     *
     * @key = Country ISO Code
     * @value = Country Name
     */
    public function countries()
    {
        if ($this->countries)
            return $this->countries;

        $ttl = config('geography.cache_ttl', 60*24);
        $cacheKey = 'country_list';

        $this->countries = $this->cache->remember($cacheKey, $ttl, function () {
            $countries = [];
            $all_data = $this->allData;

            foreach ($all_data as $code => $country) {
                $countries[$code] = $country['name'];
            }

            ksort($countries);
            return $countries;
        });

        return $this->countries;
    }


    /**
     * All Country Data
     *
     * @key = Country ISO
     */
    public function allData()
    {
        if ($this->allData)
            return $this->allData;

        $cacheKey = 'country_all';
        $this->allData = $this->cache->get($cacheKey);

        return $this->allData;
    }


    /**
     * Set the Country Code
     *
     * @param $code
     */
    public function country($code)
    {
        $this->code = strtolower($code);
        return $this;
    }


    /**
     * All Data for a Single Country
     *
     * @param $code
     */
    public function all()
    {
        $allData = $this->allData();
        return $allData[$this->code];
    }


    /**
     * Pull Partitions for a country
     *
     * @param $code
     */
    public function partitions($type='')
    {
        $allData = $this->all();
        $partitions = $allData['partitions'];

        if ($type)
            return $partitions[$type];

        return $partitions;
    }


    /**
     * Pull All Partition Names. Make sure they are sorted by name ASC
     *
     * @param string $type
     */
    public function partitionNames($type='')
    {
        $partitions = [];
        foreach ($this->partitions($type) as $p) {
            $partitions[$p['abbr']] = $p['name'];
        }

        ksort($partitions);
        return $partitions;
    }


    /**
     * Pull the Primary Language for a Country
     *
     */
    public function language()
    {
        $allData = $this->all();
        return $allData['language'];
    }


    public function name()
    {
        $allData = $this->all();
        return $allData['name'];
    }

    /**
     * Pull Full Name of the Country
     *
     */
    public function fullName()
    {
        $allData = $this->all();
        return $allData['name_full'];
    }


    /**
     * Alias for Full Name of Country
     *
     * @return mixed
     */
    public function nameFull()
    {
        return $this->fullName();
    }

}