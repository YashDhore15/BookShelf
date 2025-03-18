<?php
session_start();
session_destroy();  // Completely destroy the session
header("Location: /BookShelf/index.php"); // Redirect to home page
exit();
?>
