<?php

return
[
    'paths' => [
        'migrations' => __DIR__ . '/db/migrations',
        'seeds' => __DIR__ . '/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'development' => [
            "adapter" => getenv("DB_ADAPTER"),
            "host"    => getenv("DB_HOST"),
            "port"    => getenv("DB_PORT"),
            "user"    => getenv("DB_USER"),
            "pass"    => getenv("DB_PASSWORD"),
            "name"    => getenv("DB_DATABASE"),
            'charset' => getenv("DB_CHARSET")
        ]
    ],
    'version_order' => 'creation'
];
