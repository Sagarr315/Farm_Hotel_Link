<?php
session_start();

// Check if the user is logged in and is a Hotel Owner
if (!isset($_SESSION['UserID']) || $_SESSION['UserType'] != 'HotelOwner') {
    header("Location: login.html"); // Redirect to login page if not authenticated
    exit();
}

// Display the Hotel Owner dashboard
echo "<h1>Welcome, " . $_SESSION['Name'] . " (Hotel Owner)</h1>";
// Add your Hotel Owner-specific content here
?>
