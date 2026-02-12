<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "workshop_db";

$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
die(json_encode([
"status" => 500,
"message" => "Database connection failed"
]));
}
?>