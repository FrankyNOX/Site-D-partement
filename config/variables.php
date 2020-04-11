<?php

return [

    'boolean' => [
        '0' => 'No',
        '1' => 'Yes',
    ],

    'title' => [
        '0' => 'M.',
        '1' => 'Dr.',
        '2' => 'Pr.',
    ],

    'role' => [
        '0' => 'Etudiant',
        '1' => 'Enseignant',
        '4' => 'Admin',
        '5' => 'Superadmin',
    ],

    'status' => [
        '1' => 'Active',
        '0' => 'Inactive',
    ],

    'avatar' => [
        'folder' => public_path() . '/files/avatar/',

        'image' => [
            'width'  => 160,
            'height' => 160,
        ]
    ],

    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
    */
    'APP_ADMIN' => env('APP_ADMIN', 'admin'),
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),
];
