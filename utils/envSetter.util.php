<?php

require_once BASE_PATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// Create $databases array safely
$databases = [
    'pgHost' => $_ENV['PG_HOST'] ?? null,
    'pgPort' => $_ENV['PG_PORT'] ?? null,
    'pgUser' => $_ENV['PG_USER'] ?? null,
    'pgPassword' => $_ENV['PG_PASSWORD'] ?? null,
    'pgDB' => $_ENV['PG_DB'] ?? null,
    'mongoHost' => $_ENV['MONGO_HOST'] ?? null,
    'mongoPort' => $_ENV['MONGO_PORT'] ?? null,
];
