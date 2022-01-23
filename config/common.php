<?php

return [
    'const' => [
        'DEBUG' => false,
        'VIEWS' => dirname(__DIR__).'/app/views',
        'APP' => dirname(__DIR__).'/app',
        'IMAGES' => getcwd().'/images',
    ],
    'settings' => [],
    'mail' => [
        'login' => '',
        'pass' => '',
        'mailServer' => 'smtp.yandex.ru',
        'port' => 465,
        'encryption' => 'SSL',
    ],
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'pf_nsk',
        'username' => '',
        'password' => '',
        'charset'=>'utf8',
        'collation'=>'utf8_unicode_ci',
        'prefix'    => ''
    ]
];