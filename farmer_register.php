<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        form {
            width: 50%;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"], form input[type="email"], form input[type="password"], form input[type="tel"] {
            width: 90%;
            padding: 15px;
            margin: 10px 0;
            font-size: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        form button[type="submit"] {
            width: 95%;
            padding: 15px;
            font-size: 24px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        form button[type="submit"]:hover {
            background-color: #218838;
        }

        h1 {
            font-size: 50px;
            color: black;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
        }

        .form-container {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    
    <div class="form-container">
        <center>
            <h1><u>Farmer Registration</u></h1>
            <form id="registrationForm" action="process_farmers_registration.php" method="POST" onsubmit="return validateForm();">
                <input type="text" name="name" placeholder="Farmer Name" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="tel" name="phone" placeholder="Phone Number" required><br>
                <input type="password" name="password" placeholder="Password" required><br>

            <!-- Hidden input to set the user type as Farmer -->
            <input type="hidden" name="user_type" value="Farmer">
            
                <button type="submit">Register</button><br>
            </form>
        </center>
    </div>
     <script> // javascipt for client-side validation
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        event.preventDefault(); // Prevent form submission
    }

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault(); // Prevent form submission
    }

    var phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        event.preventDefault(); // Prevent form submission
    }
});
</script>
</body>
</html>
