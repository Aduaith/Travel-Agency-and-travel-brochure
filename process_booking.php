<?php
// Include your connection script
include 'connection.php';

// Assume you have a session started to store user information
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Fetch user details from the database
    $userId = $_SESSION['user_id'];
    $userDetailsQuery = "SELECT username, email FROM users WHERE user_id = $userId";
    $userDetailsResult = $connect->query($userDetailsQuery);

    if ($userDetailsResult && $userDetailsResult->num_rows > 0) {
        $userDetails = $userDetailsResult->fetch_assoc();
        $username = $userDetails['username'];
        $email = $userDetails['email'];

        // Assume the package information is received from the form
        $packageName = $_POST['package_name'] ?? '';
        $destination = $_POST['destination'] ?? '';
        $duration = $_POST['duration'] ?? '';
        $price = $_POST['price'] ?? '';

        // Assume you have a table named 'bookings' to store booked packages
        // Add booked package information to the 'bookings' table
        $insertBookingQuery = "INSERT INTO bookings (user_id, package_name, destination, duration, price) 
                              VALUES ($userId, '$packageName', '$destination', '$duration', '$price')";

        if ($connect->query($insertBookingQuery) === TRUE) {
            // Booking successful, display a success message
            echo 'Booking successful! Thank you for choosing Voyage Vista.';
        } else {
            // Booking failed, display an error message
            echo 'Booking failed. Please try again later.';
        }
    } else {
        echo 'Error fetching user details: ' . $connect->error;
    }
} else {
    // User not logged in, handle accordingly
    echo 'User not logged in. Please log in to proceed.';
}

// Close the database connection
$connect->close();
?>
