<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$pgConfig = [
  'host' => $_ENV['PG_HOST'],
  'port' => $_ENV['PG_PORT'],
  'db'   => $_ENV['PG_DB'],
  'user' => $_ENV['PG_USER'],
  'pass' => $_ENV['PG_PASS'],
];

$mongoPort = $_ENV['MONGO_PORT'];
