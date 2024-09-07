<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['userType'])) {
        $userType = $_POST['userType'];

        // Redirect based on the button clicked
        if ($userType == 'Farmer') {
            header('Location: farmer_register.php');
        } elseif ($userType == 'Hotel Owner') {
            header('Location: hotel_register.php');
        } else {
            echo "Invalid selection.";
        }
        exit();
    } else {
        echo "No user type selected.";
    }
} else {
    echo "No form submission detected.";
}
