<?php

use \Doctrine\DBAL\Driver\PDO\MySQL\Driver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'driverClass' => Driver::class,

                    // TODO: usar variável de ambiente

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
