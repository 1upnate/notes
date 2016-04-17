<?php
$servername = "localhost";
$username = "notes";
$password = "Vanhalen22!";
$dbname = "notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
