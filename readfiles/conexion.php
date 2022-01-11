<?php
use Illuminate\Database\Capsule\Manager as Database;

    $database = new Database;

    $database->addConnection([
        'driver' => 'mysql',
        'host' => 'sql564.main-hosting.eu',
        'database' => 'u538549096_cimportacion',
        'username' => 'u538549096_admin',
        'password' => 'Comun123*',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

    $database->setAsGlobal();

    $database->bootEloquent();
?>