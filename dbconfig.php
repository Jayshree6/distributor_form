<?php
// Database configuration
$host = "localhost"; // Replace with your database host
$username = "mjhinxb3_wp268"; // Replace with your database username
$password = "6-pP5X[S6v"; // Replace with your database password
$database = "mjhinxb3_mobillaapp"; // Replace with your database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>