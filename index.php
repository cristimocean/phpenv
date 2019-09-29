<?php
require_once 'vendor/autoload.php';

use Medoo\medoo;

$database = new medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);
