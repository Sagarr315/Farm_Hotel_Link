<?php
session_start();
include('db_connection.php'); // Assumes you have a db_connection.php to connect to MySQL

// Check if the session variables are set
if (!isset($_SESSION['UserID']) || !isset($_SESSION['UserType'])) {
    // Redirect to login page if session variables are not set
    header("Location: login.php");
    exit();
}

// Get the data from the form
$user_id = $_SESSION['UserID']; // Get user ID from session
$user_type = $_SESSION['UserType']; // Get user type from session

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure that form data exists
    if (isset($_POST['website_quality'], $_POST['improvements'], $_POST['logout_reason'])) {
        $website_quality = $_POST['website_quality'];
        $improvements = $_POST['improvements'];
        $logout_reason = $_POST['logout_reason'];

        // Insert feedback into the 'feedback' table
        $query = "INSERT INTO feedback (UserID, UserType, website_quality, improvements, logout_reason) 
                  VALUES (?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($query)) {
            // Bind parameters
            $stmt->bind_param("issss", $user_id, $user_type, $website_quality, $improvements, $logout_reason);
            
            if ($stmt->execute()) {
                // Feedback submitted successfully, now log out the user
                session_destroy(); // Destroy the session
                header("Location: login.HTML"); // Redirect to login page
                exit;
            } else {
                echo "Error: Could not submit feedback.";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: Missing form data.";
    }
}
?>
