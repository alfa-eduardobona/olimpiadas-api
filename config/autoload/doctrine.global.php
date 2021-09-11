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
                    'user'     => 'root',
                    'password' =>  'alfa',
                    'dbname'   => 'olimpiadas',
                ],
            ],
        ],
    ],
];
