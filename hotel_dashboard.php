
<?php
session_start();

// Check if the user is logged in and is a Hotel Owner
if (!isset($_SESSION['UserID']) || $_SESSION['UserType'] != 'HotelOwner') {
    header("Location: login.html"); // Redirect to login page if not authenticated
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Owner Dashboard</title>

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
            flex-direction: column; /* Stack items vertically */
            padding: 10px 20px;
            background-color: #2C3E50; /* Changed background color */
            color: white;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
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
    border-radius: 4px;
    margin-right: 10px; 
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


        /* Menu Styles */
        .menu {
            display: flex; /* Change to horizontal layout */
            flex-wrap: wrap; /* Allow wrapping to the next line if necessary */
            margin-top: 10px;
        }

        .menu-item {
            margin: 5px; /* Add margin between menu items */
            border-radius: 4px; /* Rounded corners for menu items */
            padding: 10px; /* Add padding */
            color: white; /* Text color */
            text-align: center; /* Center text */
            background-color: #2980b9; /* Same background color for all menu items */
        }

        .menu-item a {
            color: white;
            text-decoration: none;
            display: block; /* Make the entire area clickable */
        }

        .user-profile {
            display: flex;
            align-items: center;
        }

        /* Main Section Styles */
        main {
            padding: 20px;
        }

        h1 {
            color: #2C3E50; /* Changed header color */
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
                <input type="text" placeholder="Search..."> <!-- Search Bar -->
                <button type="button">Search</button>
            </div>
            <div class="user-profile">
                <span>Welcome, <?php echo $_SESSION['Name']; ?> (Hotel Owner)</span> <!-- PHP code to display the logged-in hotel owner's name -->
            </div>
        </div>

        <!-- Menu Section -->
        <div class="menu">
            <div class="menu-item"><a href="hotel_dashboard.php">Home</a></div>
            <div class="menu-item"><a href="profile.php">Profile</a></div>
            <div class="menu-item"><a href="browse_products.php">Browse Products</a></div>
            <div class="menu-item"><a href="place_orders.php">Place Orders</a></div>
            <div class="menu-item"><a href="manage_special_dishes.php">Manage Special Dishes</a></div>
            <div class="menu-item"><a href="track_orders.php">Track Orders</a></div>
            <div class="menu-item"><a href="logout.php">Logout</a></div>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <h1>Welcome to the Hotel Owner Dashboard</h1>
        <!-- Add Hotel Owner-specific content here -->
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Farm Hotel Link. All rights reserved.</p>
    </footer>

    <!-- Inline JavaScript -->
    <script>
        // JavaScript specific to Hotel Owner Dashboard
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Hotel Owner Dashboard loaded');
        });
    </script>
</body>
</html>
