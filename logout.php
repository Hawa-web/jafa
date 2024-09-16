<?php
session_start();
session_unset();
session_destroy();

// Clear session cookies

header("Location: login.php");
exit();
?>
