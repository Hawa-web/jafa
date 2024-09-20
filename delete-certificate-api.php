

<?php
include 'session.php';

include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM certificates WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: certificate-list.php?status=success");
        exit;
    } else {
        header("Location: certificate-list.php?status=fail");
        exit;
    }
}

$conn->close();
?>
