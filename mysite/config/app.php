<?php
return [
    'app' => [
        'name' => 'GeekBrain PHP 1',
        'host' => 'php.course/mysite/public_html/',
        'logPath' => ROOT . '/data/logs',
        'templatesPath' => ROOT . '/templates',

        'assets' => [
            'css' => [
                '/mysite/public_html/css/bootstrap.min.css',
                '/mysite/public_html/css/style.css'
            ],
            'js' => [
                '/mysite/public_html/js/vendor/bootstrap.min.js',
                '/mysite/public_html/js/vendor/jquery-3.5.1.min.js',
                '/mysite/public_html/js/vendor/popper.min.js',
                '/mysite/public_html/js/app.js'
            ],
            'img' => [
                '/mysite/public_html/img/1.jpg',
                '/mysite/public_html/img/2.jpg',
                '/mysite/public_html/img/3.jpg'
            ]
        ]
    ]
];