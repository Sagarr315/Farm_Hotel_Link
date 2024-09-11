<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password for root
$dbname = "farm_hotel_link"; // Correct database name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$userType = $_POST['user_type']; // Assuming this is a dropdown or radio button input

// Validate data (basic validation)
if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($userType)) {
    echo "All fields are required.";
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (Name, Email, Phone, Password, UserType) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $hashed_password, $userType);

// Execute statement
if ($stmt->execute()) {
    echo "Registration successful. <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
