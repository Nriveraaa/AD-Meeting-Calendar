<?php
// 1. Turn on error reporting temporarily
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Define BASE_PATH
define('BASE_PATH', realpath(__DIR__));
define('UTILS_PATH', realpath(BASE_PATH . '/utils'));
define('HANDLERS_PATH', realpath(BASE_PATH . '/handlers'));

// 3. Include env loader
require_once UTILS_PATH . '/envSetter.util.php';

// 4. Include the checkers
require_once HANDLERS_PATH . '/mongodbChecker.handler.php';
require_once HANDLERS_PATH . '/postgreChecker.handler.php';
