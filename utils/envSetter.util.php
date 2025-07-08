<?php

require_once BASE_PATH . '/bootstrap.php';               // Load base path
require_once BASE_PATH . '/vendor/autoload.php';         // Load Composer packages (like dotenv)

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);     // Load .env file from project root
$dotenv->load();                                          // Activate the .env variables

// Distribute environment variables into an array
$databases = [
    // PostgreSQL
    'pgHost'     => $_ENV['PG_HOST'],
    'pgPort'     => $_ENV['PG_PORT'],
    'pgUser'     => $_ENV['PG_USER'],
    'pgPassword' => $_ENV['PG_PASSWORD'],
    'pgDB'       => $_ENV['PG_DB'],

    // MongoDB
    'mongoHost'  => $_ENV['MONGO_HOST'],
    'mongoPort'  => $_ENV['MONGO_PORT'],
];
