<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == "True") {
    // Unset all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();

    // Redirect to login page with a success message
    $_SESSION['success'] = "You have logged out successfully.";
    header("Location: login.php");
    exit();
} else {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>
