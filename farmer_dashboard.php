<?php
session_start();

// Check if the user is logged in and is a Farmer
if (!isset($_SESSION['UserID']) || $_SESSION['UserType'] != 'Farmer') {
    header("Location: login.html"); // Redirect to login page if not authenticated
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard</title>

    <!-- Inline CSS -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        /* Header Styles */
        header {
            display: flex;
            flex-direction: column;
            padding: 10px 20px;
            background-color: #228B22; /* Background color for Farmer dashboard */
            color: white;
        }

        .header-top {
            display: flex;
            
            align-items: center;
        }

       .search-container {
       display: flex;
       justify-content: space-between; /* Ensures search bar is aligned properly */
       width: 40%; /* Adjust percentage based on how wide you want it */
       margin: 0 auto; /* Centers the search bar */
       }

       .search-container input[type="text"] {
       width: 85%; /* Adjusts the search input to take most of the available space */
       padding: 10px;
       border: none;
       margin-right: 10px; 
       border-radius: 4px;
       font-size: 14px;
        }

       .search-container button {
        width: 12%; /* Adjust width for the search button */
        padding: 10px;
        border: 1px solid #ccc;
        background-color: white;
        border-radius: 4px;
        font-size: 14px;
        }
        /* Menu Styles (Similar to Hotel Owner Dashboard) */
        .menu {
            display: flex;
            flex-wrap: wrap; /* Allows wrapping */
            margin-top: 10px; /* Increased margin for better spacing */
        }

        .menu-item {
            margin: 5px;
            border-radius: 4px;
            padding: 10px;
            color: Black;
            text-align: center;
            font-weight: bold;
            background-color: #F0FFF0; /* Keeping the existing color for Farmer */
        }

        .menu-item a {
            color: Black;
            text-decoration: none;
            display: block;
        }

        .menu-item a:hover {
            background-color: #555; /* Hover effect */
        }

        .user-profile {
            margin-left: auto; /* Push the welcome message to the right side */
            font-size: 16px;
        }

        /* Main Section Styles */
        main {
            padding: 20px;
        }

        h1 {
            color: #228B22; /* Retain the header color */
            font-size: 28px;
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
    <!-- Header Section -->
    <header>
        <div class="header-top">
            <img src="images/farm_hotel_link_logo.png" alt="Farm Hotel Link Logo" class="logo" style="width: 65px;"> <!-- Add the logo here -->
            <strong style="font-size: 45px; color: white;">Farm Hotel Link</strong> <!-- Website Name -->
            <div class="search-container">
                <input type="text" placeholder="Search For Hotel Or Product... "> <!-- Search Bar -->
                <button type="button">Search</button>
            </div>
            <div class="user-profile">
                <span>Welcome, <?php echo $_SESSION['Name']; ?> (Farmer)</span> <!-- PHP code to display the logged-in farmer's name -->
            </div>
        </div>

        <!-- Menu Section (Updated to match Hotel Owner layout) -->
        <div class="menu">
            <div class="menu-item"><a href="farmer_dashboard.php">Home</a></div>
            <div class="menu-item"><a href="profile.php">Profile</a></div>
            <div class="menu-item"><a href="manage_products.php">Manage Products</a></div>
            <div class="menu-item"><a href="view_hotel_owners.php">Hotel Location</a></div>
            <div class="menu-item"><a href="view_special_dishes.php">Special Dishes</a></div>
            <div class="menu-item"><a href="orders_overview.php">Orders</a></div>
            <div class="menu-item"><a href="logout.php">Logout</a></div>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <h1>Welcome to the Farmer Dashboard</h1>
        <!-- Add Farmer-specific content here -->
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Farm Hotel Link. All rights reserved.</p>
    </footer>

    <!-- Inline JavaScript -->
    <script>
        // JavaScript specific to Farmer Dashboard
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Farmer Dashboard loaded');
        });
    </script>
</body>
</html>



