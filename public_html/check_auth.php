<?php
session_start();

// Check if user is not authenticated
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page
    header('Location: /index.php');
    exit;
}
?>
