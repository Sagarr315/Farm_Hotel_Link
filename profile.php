<?php
session_start();
// Assuming user data is stored in the session after login
$farmer_name = isset($_SESSION['farmer_name']) ? $_SESSION['farmer_name'] : 'Farmer Name';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'farmer@example.com';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '1234567890';

// Initialize other variables
$farm_address = isset($_SESSION['farm_address']) ? $_SESSION['farm_address'] : '';
$crops_grown = isset($_SESSION['crops_grown']) ? $_SESSION['crops_grown'] : '';
$preferred_contact = isset($_SESSION['preferred_contact']) ? $_SESSION['preferred_contact'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2d872c;
            padding: 20px;
            color: white;
            text-align: center;
            font-size: 34px;
            font-weight:bold;
        }
        header img {
            max-width: 100px; /* Adjust the size as needed */
            height: auto;
            display: block;
            margin: 0 auto 10px; /* Center the logo and add some margin */
        }
        nav {
            margin: 20px 0;
            text-align: center;
        }
        nav a {
            background-color: #2d872c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 0 10px;
            font-size: 18px;
        }
        nav a:hover {
            background-color: #45a049;
        }
        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-container h2 {
            color: #2d872c;
        }
        .profile-container label {
            font-weight: bold;
        }
        .profile-container input[type="text"],
        .profile-container input[type="email"],
        .profile-container input[type="tel"],
        .profile-container input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .profile-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .profile-container button {
            background-color: #2d872c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .profile-container button:hover {
            background-color: #45a049;
        }

       /* Footer Styles */
       footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
    <header>
        <img src="images/farm_hotel_link_logo.png" alt="Farm Hotel Link Logo"> <!-- Add your logo image here -->
        Farm Hotel Link
    </header>

    <nav>
        <a href="farmer_home.php">Home</a>
        <a href="manage_products.php">Manage Products</a>
        <a href="location.php">Hotel Location</a>
        <a href="orders.php">Orders</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="profile-container">
        <h2>Your Profile</h2>
        <form action="update_profile.php" method="POST" enctype="multipart/form-data">
            <label for="farmer_name">Name:</label>
            <input type="text" id="farmer_name" name="farmer_name" value="<?php echo htmlspecialchars($farmer_name); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>

            <label for="farm_address">Farm Address:</label>
            <input type="text" id="farm_address" name="farm_address" value="<?php echo htmlspecialchars($farm_address); ?>" required>
            
            <label for="crops_grown">Types of Crops Grown:</label>
            <input type="text" id="crops_grown" name="crops_grown" value="<?php echo htmlspecialchars($crops_grown); ?>" required>
            
            <label for="preferred_contact">Preferred Contact Method:</label>
            <select id="preferred_contact" name="preferred_contact" required>
                <option value="Phone" <?php echo ($preferred_contact == 'Phone') ? 'selected' : ''; ?>>Phone</option>
                <option value="Email" <?php echo ($preferred_contact == 'Email') ? 'selected' : ''; ?>>Email</option>
            </select>
            
            <label for="profile_picture">Upload Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*">

            <button type="submit">Update Profile</button>
        </form>
    </div>

    <footer>
        &copy; 2024 Farm Hotel Link. All rights reserved.
    </footer>
</body>
</html>
