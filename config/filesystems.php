<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        'avatar' => [
            'driver' => 'local',
            'root' => public_path() . '/img/avatar/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'admins' => [
            'driver' => 'local',
            'root' => public_path() . '/img/admins/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'aboutUs' => [
            'driver' => 'local',
            'root' => public_path() . '/img/aboutUs/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'Service' => [
            'driver' => 'local',
            'root' => public_path() . '/img/Service/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],
        'Announcement' => [
            'driver' => 'local',
            'root' => public_path() . '/img/Announcement/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'Blog' => [
            'driver' => 'local',
            'root' =>  '/var/www/html/billfold/public/img/Blog/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'Contact' => [
            'driver' => 'local',
            'root' => public_path() . '/img/Contact/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'Company' => [
            'driver' => 'local',
            'root' => public_path() . '/img/Company/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],
        'Portfolio' => [
            'driver' => 'local',
            'root' => public_path() . '/img/Portfolio/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'invoice' => [
            'driver' => 'local',
            'root' => public_path() . '/img/invoice/',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
