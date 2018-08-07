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
    'name' => 'United Kingdom',
    'name_full' => 'United Kingdom of Great Britain and Northern Ireland',
    'abbr' => 'GB',
    'abbr_long' => 'GBR',
    'continent' => 'Europe',
    'capital' => 'London',


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
        'symbol' => '£',
        'symbol_html' => '',
        'name' => 'Great Britian Pound',
        'abbr' => 'GBP',
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
            'ENG' => [
                'name' => 'England',
                'abbr' => 'ENG',
                'region' => '',
                'capital' => '',
            ],
            'SCT' => [
                'name' => 'Scotland',
                'abbr' => 'SCT',
                'region' => '',
                'capital' => '',
            ],
            'WAL' => [
                'name' => 'Wales',
                'abbr' => 'WAL',
                'region' => '',
                'capital' => '',
            ],
            'NIR' => [
                'name' => 'Northern Ireland',
                'abbr' => 'NIR',
                'region' => '',
                'capital' => '',
            ],
        ],
    ],
];