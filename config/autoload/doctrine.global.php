<?php

use \Doctrine\DBAL\Driver\PDO\MySQL\Driver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'driverClass' => Driver::class,
                    'host'     => getenv('DB_HOST'),
                    'port'     => getenv('DB_PORT'),
                    'user'     => getenv('DB_USER'),
                    'password' => getenv('DB_PASSWORD'),
                    'dbname'   => getenv('DB_DATABASE'),
                ],
            ],
        ],
    ],
];
