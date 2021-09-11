<?php

use \Doctrine\DBAL\Driver\PDO\Mysql\Driver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'driverClass' => Driver::class,
                    'host'     => 'db',
                    'port'     => '3306',
                    'user'     => 'alfa',
                    'password' =>  'alfa_2021_09',
                    'dbname'   => 'alfa_olimpiadas',
                ],
            ],
        ],
    ],
];
