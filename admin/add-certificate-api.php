<?php
include 'session.php';
?>

<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];

    // Image upload directory
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO certificates (title, image) VALUES ('$title', '$image')";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the form with a success status
            header("Location: add-certificate.php?status=success");
            exit;
        } else {
            // Redirect back to the form with a failure status
            header("Location: add-certificate.php?status=fail");
            exit;
        }
    } else {
        // Redirect back to the form with a failure status
        header("Location: add-certificate.php?status=fail");
        exit;
    }
}

$conn->close();
?>
