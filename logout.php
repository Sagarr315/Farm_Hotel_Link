<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .header, .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
        }
        .header img {
            height: 50px;
            vertical-align: middle;
        }
        .header h1 {
            display: inline-block;
            margin-left: 10px;
            vertical-align: middle;
        }
        .logout-container {
            background-color: white;
            padding: 20px;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logout-container h2 {
            color: #333;
        }
        .logout-container p {
            margin: 20px 0;
        }
        .logout-container .buttons {
            margin: 20px 0;
        }
        .logout-container button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        .logout-container button:hover {
            background-color: #0056b3;
        }
        .feedback-form {
            display: none; /* Initially hidden */
        }
        textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Header with logo and website name -->
    <div class="header">
        <img src="images/farm_hotel_link_logo.png" alt="Website Logo" style="width: 65px; height:65px;">
        <h1 style="font-weight:bold; font-size:45px;">Farm Hotel Link</h1>
    </div>

    <div class="logout-container">
        <h2>Do you really want to logout?</h2>
        <p>Please provide feedback before you logout.</p>

        <!-- Buttons for Yes and No -->
        <div class="buttons">
            <button id="yesButton">Yes</button>
            <button onclick="window.location.href='dashboard.php';">No</button>
        </div>

        <!-- Feedback Form (Initially hidden) -->
        <div class="feedback-form" id="feedbackForm">
            <form action="logout_process.php" method="POST">
                <p><strong>Is our website good or bad?</strong></p>
                <label>
                    <input type="radio" name="website_quality" value="Good" required> Good
                </label>
                <label>
                    <input type="radio" name="website_quality" value="Bad" required> Bad
                </label>

                <p><strong>What improvements should we make?</strong></p>
                <textarea name="improvements" placeholder="Type your feedback here..." required></textarea>

                <p><strong>What is the reason for logging out?</strong></p>
                <textarea name="logout_reason" placeholder="Why are you logging out?" required></textarea>

                <button type="submit">Submit Feedback & Logout</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Farm Hotel Link. All rights reserved.</p>
    </div>

    <script>
        document.getElementById('yesButton').addEventListener('click', function() {
            document.getElementById('feedbackForm').style.display = 'block';
            this.style.display = 'none';
        });
    </script>
</body>
</html>
