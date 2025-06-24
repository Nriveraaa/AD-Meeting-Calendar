<?php
require_once __DIR__ . '/../vendor/autoload.php';  // needed for dotenv

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');  // loads from the root
$dotenv->load();  // now you can access $_ENV variables

// PostgreSQL config
$pgConfig = [
    'host' => $_ENV['PG_HOST'],
    'port' => $_ENV['PG_PORT'],
    'db'   => $_ENV['PG_DB'],
    'user' => $_ENV['PG_USER'],
    'pass' => $_ENV['PG_PASS'],
];

// MongoDB config
$mongoPort = $_ENV['MONGO_PORT'];
