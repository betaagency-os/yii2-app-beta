<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.$_SERVER['MYSQL_HOST'].';dbname='.$_SERVER['MYSQL_DATABASE'],
            'username' => $_SERVER['MYSQL_USER'],
            'password' => $_SERVER['MYSQL_PASSWORD'],
            'charset' => 'utf8',
            'on afterOpen' => function($event) {
              $event->sender->createCommand("SET time_zone = '+03:00'")->execute();
              #$event->sender->createCommand("SET SESSION query_cache_type=0;")->execute();
            }
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
