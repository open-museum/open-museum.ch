<?php
return [
    'logger' => [
        'log' => false,
        // 'priority' => \Laminas\Log\Logger::NOTICE,
    ],
    'http_client' => [
        'sslcapath' => null,
        'sslcafile' => null,
    ],
    'cli' => [
        'phpcli_path' => null,
    ],
    'thumbnails' => [
        'types' => [
            'large' => ['constraint' => 2500],
            'medium' => ['constraint' => 800],
            'square' => ['constraint' => 200],
        ],
        'thumbnailer_options' => [
            'imagemagick_dir' => null,
        ],
    ],
    'translator' => [
        'locale' => 'en_US',
    ],
    'service_manager' => [
        'aliases' => [
            'Omeka\File\Store' => 'Omeka\File\Store\Local',
            'Omeka\File\Thumbnailer' => 'Omeka\File\Thumbnailer\ImageMagick',
        ],
    ],
    'mail' => [
        'transport' => [
            'type' => 'smtp',
            'options' => [
                'name' => 'localhost',
                'host' => getenv('EMAIL_HOST'), //'127.0.0.1'
                'port' => getenv('EMAIL_PORT'), // 25, 465 for 'ssl', and 587 for 'tls'
                'connection_class' => 'smtp', // 'plain', 'login', or 'crammd5'
                'connection_config' => [
                    'username' => getenv('EMAIL_USER'),
                    'password' => getenv('EMAIL_PASSWORD'),
                    'ssl' => getenv('EMAIL_CONNECTION_TYPE'), // 'null', 'ssl' or 'tls'
                    'use_complete_quit' => true,
                ],
            ],
        ],
    ],
];
