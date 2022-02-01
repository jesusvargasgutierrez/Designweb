<?php
use Illuminate\Database\Capsule\Manager as Database;

    $database = new Database;

    $database->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'comprascountry',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

    $database->setAsGlobal();

    $database->bootEloquent();
?>