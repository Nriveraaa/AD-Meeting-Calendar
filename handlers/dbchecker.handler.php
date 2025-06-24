<?php
require_once __DIR__ . '/../utils/envSetter.util.php';  // loads the .env values

// ✅ PostgreSQL connection using .env
try {
    $dsn = "pgsql:host={$pgConfig['host']};port={$pgConfig['port']};dbname={$pgConfig['db']}";
    $pdo = new PDO($dsn, $pgConfig['user'], $pgConfig['pass']);
    echo "✅ PostgreSQL Connection<br>";
} catch (PDOException $e) {
    echo "❌ PostgreSQL Connection Failed: " . $e->getMessage() . "<br>";
}

// ✅ MongoDB connection using .env
try {
    $mongo = new MongoDB\Driver\Manager("mongodb://host.docker.internal:$mongoPort");
    $mongo->executeCommand("admin", new MongoDB\Driver\Command(["ping" => 1]));
    echo "✅ Connected to MongoDB successfully.<br>";
} catch (Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . "<br>";
}
