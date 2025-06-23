<?php
<?php
echo "<h2>Database Connection Checker</h2>";

// MongoDB Checker
echo "<strong>MongoDB:</strong><br>";
require_once __DIR__ . '/mongodbChecker.handler.php';

// PostgreSQL Checker
echo "<br><strong>PostgreSQL:</strong><br>";
require_once __DIR__ . '/postgreChecker.handler.php';
?>