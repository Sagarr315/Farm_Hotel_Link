<?php
session_start(); // Start a new session or resume the existing session

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farm_hotel_link";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Validate data (basic validation)
if (empty($email) || empty($password)) {
    echo "Both email and password are required.";
    exit();
}

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT UserID, Name, Password, UserType FROM users WHERE Email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

// Check if the user exists
if ($stmt->num_rows > 0) {
    $stmt->bind_result($userID, $name, $hashed_password, $userType);
    $stmt->fetch();
    
    // Verify password
    if (password_verify($password, $hashed_password)) {
        // Store user information in session variables
        $_SESSION['UserID'] = $userID;
        $_SESSION['Name'] = $name;
        $_SESSION['UserType'] = $userType;
        
        // Redirect based on user type
        if ($userType == 'Farmer') {
            header("Location: farmer_dashboard.php");
        } elseif ($userType == 'HotelOwner') {
            header("Location: hotel_dashboard.php");
        }
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No account found with that email.";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
