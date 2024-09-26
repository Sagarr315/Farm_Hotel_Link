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
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
        }

        .menu nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .menu nav ul li {
            margin-right: 20px;
        }

        .menu nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
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
            color: #4CAF50;
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
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="farmer_dashboard.html">Home</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="orders.html">Orders</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="user-profile">
            <span>Welcome, <?php echo $_SESSION['Name']; ?> (Farmer)</span> <!-- PHP code to display the logged-in farmer's name -->
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
