<?php
session_start();

// Check if the user is logged in and is a Farmer
if (!isset($_SESSION['UserID']) || $_SESSION['UserType'] != 'Farmer') {
    header("Location: login.html"); // Redirect to login page if not authenticated
    exit();
}

// Display the Farmer dashboard
echo "<h1>Welcome, " . $_SESSION['Name'] . " (Farmer)</h1>";
// Add your Farmer-specific content here
?>
