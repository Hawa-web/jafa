<?php
include 'session.php';
?>

<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    // Image upload directory
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO blogs (category, title, description, image) VALUES ('$category', '$title', '$description', '$image')";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the form with a success status
            header("Location: admin-blog-form.php?status=success");
            exit;
        } else {
            // Redirect back to the form with a failure status
            header("Location: admin-blog-form.php?status=fail");
            exit;
        }
    } else {
        // Redirect back to the form with a failure status
        header("Location: admin-blog-form.php?status=fail");
        exit;
    }
}

$conn->close();
?>
