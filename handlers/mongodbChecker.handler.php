<?php
// Define BASE_PATH if not yet defined
if (!defined('BASE_PATH')) {
    define('BASE_PATH', realpath(__DIR__ . '/../'));
    define('UTILS_PATH', realpath(BASE_PATH . '/utils'));
}

require_once UTILS_PATH . '/envSetter.util.php';

try {
    $host = $databases['mongoHost'];
    $port = $databases['mongoPort'];

    $mongo = new MongoDB\Driver\Manager("mongodb://$host:$port");

    $command = new MongoDB\Driver\Command(["ping" => 1]);
    $mongo->executeCommand("admin", $command);

    echo "✅ Connected to MongoDB successfully. <br>";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . " <br>";
}
