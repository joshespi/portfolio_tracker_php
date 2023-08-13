<?php
session_start();


// Check if user is not logged in and not on the login page
if (!isset($_SESSION['user_id']) && basename($_SERVER['PHP_SELF']) != 'index.php') {
    // Redirect to login page
    header('Location: index.php');
    exit;
  }
?>
