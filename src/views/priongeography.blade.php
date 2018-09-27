<?php echo '<?php' ?>

return [
    /**
    |---------------------------------------------------------------------------
    |   Set Cache for Geogrpahy Data
    |---------------------------------------------------------------------------
    |
    |   Turn the cache on/off and set the lenght of time to store in cache.
    |   This is to reduce the number of file lookups. The world has over 260
    |   countries. Lookup up 260 data files will take time.
    |
     */

    'use_cache' => true, // true or false

    'cache_ttl' => 60, // in minutes
];