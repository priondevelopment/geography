<?php

/*
|------------------------------------------------------------
|   Brazil Geography Data
|------------------------------------------------------------
|
|
|
*/

return [
    'name' => 'Ireland',
    'name_full' => 'Republic of Ireland',
    'abbr' => 'IE',
    'abbr_long' => 'GBR',
    'continent' => 'Europe',
    'capital' => 'Dublin',


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
        'symbol' => '€',
        'symbol_html' => '',
        'name' => 'Euro',
        'abbr' => 'EUR',
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
        'countries' => [
            'LEN' => [
                'name' => 'Leinster',
                'abbr' => 'LEN',
                'region' => '',
                'capital' => 'Dublin',
            ],
            'UIE' => [
                'name' => 'Ulster',
                'abbr' => 'UIE',
                'region' => '',
                'capital' => 'Belfast',
            ],
            'MUN' => [
                'name' => 'Munster',
                'abbr' => 'MUN',
                'region' => '',
                'capital' => 'Cork',
            ],
            'CON' => [
                'name' => 'Connacht',
                'abbr' => 'CON',
                'region' => '',
                'capital' => 'Galway',
            ],
        ],
    ],
];