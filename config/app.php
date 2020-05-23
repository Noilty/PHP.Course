<?php
return [
    'app' => [
        'name' => 'GeekBrain PHP 1',
        'host' => 'public_html/',
        'logPath' => ROOT . '/data/logs',
        'templatesPath' => ROOT . '/templates',
        'imagesUrl' => '/images',
        'imagesPath' => 'images',

        'assets' => [
            'css' => [
                'css/bootstrap.min.css',
                'css/jquery.fancybox.min.css',
                'css/style.css'
            ],
            'js' => [
                'js/vendor/bootstrap.min.js',
                'js/vendor/jquery-3.5.1.min.js',
                'js/vendor/popper.min.js',
                'js/vendor/jquery.fancybox.min.js',
                'js/app.js'
            ],
            'images' => [
                'images/1.jpg',
                'images/2.jpg',
                'images/3.jpg'
            ]
        ]
    ]
];