<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Provide detailed error message
}
?>

