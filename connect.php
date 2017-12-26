<?php
$servername = "127.0.0.1";
$username = "root";
$password = "whkx1118";
$dbname = "homework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>