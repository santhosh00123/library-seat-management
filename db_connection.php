<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "library";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "Database connection failed: " . $conn->connect_error]));
}
?>
