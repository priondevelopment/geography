<?php

/*
|------------------------------------------------------------
|   US Geography Data
|------------------------------------------------------------
|
|
|
*/

return [
    'name' => 'United States',
    'name_full' => 'United States of America',
    'continent' => 'North America',
    'abbr' => 'US',


    /*
    |------------------------------------------------------------
    |   Currency Data
    |------------------------------------------------------------
    |
    |   These pieces include states, territories,
    |   provinces, regions, etc.
    |
    */

    'currency' => [
        'symbol' => '$',
        'symbol_html' => '',
        'name' => 'United States Dollar',
        'abbr' => 'USD',
    ],


    /*
    |------------------------------------------------------------
    |   Language Data
    |------------------------------------------------------------
    |
    |   These pieces include states, territories,
    |   provinces, regions, etc.
    |
    */

    'language' => 'English',
    'languages' => [
        'English',
        'Spanish',
    ],


    /*
    |------------------------------------------------------------
    |   Breaking the Country into Pieces
    |------------------------------------------------------------
    |
    |   These pieces include states, territories,
    |   provinces, regions, etc.
    |
    */
    'partitions' => [
        'states' => [
            'AL' => [
                'name' => 'Alabama',
                'region' => 'South',
            ],
        ],
        'territories' => [

        ],
    ],
];