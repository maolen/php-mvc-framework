<?php

use App\Framework\Application\ServiceProviders\RouteServiceProvider;

return [
    'name' => 'MVC',
    'debug' => true,

    'admin' => [
        'credentials' => [
            'username' => 'hello'
        ],
    ],
    'providers' => [
        RouteServiceProvider::class,
    ],
];