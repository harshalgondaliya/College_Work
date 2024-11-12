<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; // Your MySQL root password if any, otherwise leave it empty
$dbname = "student_portal"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
