<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google_key' => 'AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po',

    'met' => [
        'url' => 'https://api.met.gov.my/v2/',
        'key' => 'f8df06f7463cdf4ef40d0ad140da83e997e8180f',
    ],

    'django' => [
        'url' => '149.28.135.20',
        'port' => 8000,
        'username' => 'admin',
        'password' => 'admin12345'
    ],

];
