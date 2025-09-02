<?php
// this will avoid mysql_connect() deprecation error.
error_reporting(~E_DEPRECATED & ~E_NOTICE);
// but I strongly suggest you to use PDO or MySQLi.

$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$database = getenv('DB_NAME') ?: 'eaglegroup';
$port = getenv('DB_PORT') ?: 3306;

$conn = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(['error' => 'Database connection failed.']));
} else {
    //echo "Connection successful";
}

$today = date("Y-m-d");
$txtDateQueryInput = date("Y-m-d");
$dayDateNumb = date("d");

date_default_timezone_set("Europe/London");
$currentDate = date('M j, Y');

$d = mktime(11, 14, 54, 8, 12, 2014);

$cureTimeCount = date("H:i");
$echomyTime = date("H");
$echoCurDay = date("l");

$first_day_this_month = date('Y-m-01');
$last_day_this_month  = date('Y-m-t');

date_default_timezone_set('Europe/London');
$sTime = date("H:i");
