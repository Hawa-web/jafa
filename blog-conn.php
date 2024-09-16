<?php

$servername = "sql313.infinityfree.com";
$username = "if0_36788845";
$password = "xqPFW9Plg3";
$dbname = "if0_36788845_admin_panel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, category, title, description, image, reg_date FROM blogs";
$result = $conn->query($sql);

?>