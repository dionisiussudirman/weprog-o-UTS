<?php
// config.php
// Database connection configuration

$host = "localhost";
$username = "root"; // change if needed
$password = "";     // change if needed
$database = "db_penduduk"; // change if needed

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

