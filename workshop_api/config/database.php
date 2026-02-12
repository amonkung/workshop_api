<?php
$host = "localhost";   
$user = "it67040233126";        
$pass = "X9M1F2F7";            
$dbname = "it67040233126";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
die(json_encode([
"status" => 500,
"message" => "Database connection failed"
]));
}
?>