<?php

require_once('hello.php');

echo hello(" world!");

$db_host = getenv('DB_HOST') ?: "localhost";
$db_username = getenv('DB_USER') ?: "root";
$db_password = getenv('DB_PASSWORD') ?: "";
$db_database = getenv('DB_DATABASE') ?: "memy";
$db_port = intval(getenv('DB_PORT')) ?: 3306;
$db = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);
$query = "SELECT * FROM memy";
$result = $db->query($query);

echo "<br>";
while ($row = $result->fetch_row()) {
    echo $row[0] . " " . $row[1] . "<br>";
}

?>