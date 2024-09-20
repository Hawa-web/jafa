<?php

include 'session.php';

$servername = "localhost:3307";
$username = "root";
$password = "123456";
$dbname = "admin_panel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>