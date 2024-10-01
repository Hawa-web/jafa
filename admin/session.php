<?php
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['login_name'])) {
    header('Location: login.php');
    exit();
}
?>
