<?php
// Define BASE_PATH if not yet defined
if (!defined('BASE_PATH')) {
    define('BASE_PATH', realpath(__DIR__ . '/../'));
    define('UTILS_PATH', realpath(BASE_PATH . '/utils'));
}

// Load the .env and variables
require_once UTILS_PATH . '/envSetter.util.php';

$host = $databases['pgHost'];
$port = $databases['pgPort'];
$username = $databases['pgUser'];
$password = $databases['pgPassword'];
$dbname = $databases['pgDB'];

$conn_string = "host=$host port=$port dbname=$dbname user=$username password=$password";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    echo "❌ Connection Failed: ", pg_last_error() . "<br>";
    exit();
} else {
    echo "✅ PostgreSQL Connection<br>";
    pg_close($dbconn);
}
