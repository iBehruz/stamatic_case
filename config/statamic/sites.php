<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'default' => [
            'name' => config('app.name').'/en',
            'locale' => 'en_US',
            'url' => '/en',
        ],

        'ru' => [
            'name' => config('app.name').'/ru',
            'locale' => 'ru_RU',
            'url' => '/ru',
        ],

        'uz' => [
            'name' => config('app.name').'/uz',
            'locale' => 'uz_UZ',
            'url' => '/uz',
        ],

    ],
];
