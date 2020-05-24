<?php

return [
    'app' => [
        'name' => 'GeekBrain PHP 1',
        'host' => '/public_html/',
        'logPath' => ROOT . '/data/logs',
        'templatesPath' => ROOT . '/templates',
        'imagesUrl' => '/images',
        'imagesPath' => 'images',

        'assets' => [
            'css' => [
                'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
                '/css/jquery.fancybox.min.css',
                '/css/style.css',
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
            ],
            'js' => [
                'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
                'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
                '/js/vendor/jquery.fancybox.min.js',
                '/js/app.js'
            ]
        ]
    ]
];