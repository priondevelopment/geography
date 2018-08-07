<?php

/*
|------------------------------------------------------------
|   Canada Geography Data
|------------------------------------------------------------
|
|
|
*/

return [
    'name' => 'Canada',
    'name_full' => 'Canada',
    'abbr' => 'CA',
    'continent' => 'North America',
    'capital' => 'Ottawa',


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
        'name' => 'Canadian Dollar',
        'abbr' => 'CAD',
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

    'language' => '',
    'languages' => [
        'English',
        'French',
    ],


    /*
    |------------------------------------------------------------
    |   Breaking the Country into Piece
    |------------------------------------------------------------
    |
    |   These pieces include states, territories,
    |   provinces, regions, etc.
    |
    */

    'partitions' => [
        'territories' => [
            'ON' => [
                'name' => 'Ontario',
                'abbr' => 'ON',
                'region' => '',
                'capital' => 'Toronto',
            ],
            'QC' => [
                'name' => 'Quebec',
                'abbr' => 'QC',
                'region' => '',
                'capital' => 'Quebec City',
            ],
            'NS' => [
                'name' => 'Nova Scotia',
                'abbr' => 'NS',
                'region' => '',
                'capital' => 'Halifax',
            ],
            'NB' => [
                'name' => 'New Brunswick',
                'abbr' => 'NB',
                'region' => '',
                'capital' => 'Fredericton',
            ],
            'MB' => [
                'name' => 'Manitoba',
                'abbr' => 'MB',
                'region' => '',
                'capital' => 'Winnipeg',
            ],
            'BC' => [
                'name' => 'British Columbia',
                'abbr' => 'BC',
                'region' => '',
                'capital' => 'Victoria',
            ],
            'PE' => [
                'name' => 'Prince Edward Island',
                'abbr' => 'PE',
                'region' => '',
                'capital' => 'Charlottetown',
            ],
            'SK' => [
                'name' => 'Saskatchewan',
                'abbr' => 'SK',
                'region' => '',
                'capital' => 'Regina',
            ],
            'AB' => [
                'name' => 'Alberta',
                'abbr' => 'AB',
                'region' => '',
                'capital' => 'Edmonton',
            ],
            'NL' => [
                'name' => 'Newfoundland and Labrador',
                'abbr' => 'NL',
                'region' => '',
                'capital' => 'St. John\'s',
            ],
        ],
    ],
];