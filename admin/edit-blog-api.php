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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    if (!empty($image)) {
        // Image upload directory
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $sql = "UPDATE blogs SET category='$category', title='$title', description='$description', image='$image' WHERE id=$id";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        $sql = "UPDATE blogs SET category='$category', title='$title', description='$description' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: edit-blog.php?status=success");
        exit;
    } 
    else {
        header("Location: edit-blog.php?status=fail");
        exit;  
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM blogs WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

$conn->close();
?>