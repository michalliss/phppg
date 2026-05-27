<?php

$db = new mysqli("localhost", "root", "", "memy");
$query = "SELECT * FROM memy";
$result = $db->query($query);

echo "<br>";
while ($row = $result->fetch_row()) {
    echo $row[0] . " " . $row[1] . "<br>";
}

?>