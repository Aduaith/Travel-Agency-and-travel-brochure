<!-- dashboard.php -->
<?php
session_start();

// Include your connection script
include 'connection.php';

// Check if the user is registered (either logged in or just registered)
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
// ... (your existing code)

// Fetch user details from the database
$userDetailsQuery = "SELECT username, email, usertype FROM users WHERE user_id = $userId";
$userDetailsResult = $connect->query($userDetailsQuery);

if (!$userDetailsResult || $userDetailsResult->num_rows === 0) {
    // Redirect to the registration page if the user is not registered
    header('Location: register1.html');
    exit();
}

// Fetch user details
$userDetails = $userDetailsResult->fetch_assoc();
$username = $userDetails['username'];
$email = $userDetails['email'];
$userType = $userDetails['usertype']; // Fetch usertype from the database

// ... (rest of your code)


    // Fetch booked packages for the user
    $bookingsQuery = "SELECT package_name, destination, duration, price FROM bookings WHERE user_id = $userId";
    $bookingsResult = $connect->query($bookingsQuery);
} else {
    // User is not logged in or registered
    $username = "Guest";
    $email = "";
    $bookingsResult = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: "Arial, sans-serif";
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .dashboard {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-container {
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
        }

        h2 {
            margin-top: 0;
            font-size: 28px;
        }

        p {
            font-size: 18px;
        }

        .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .booked-package {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
        }

        .booked-package p {
            margin: 8px 0;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="welcome-container">
            <h2>Welcome, <?php echo $username; ?>!</h2>
            <p>Your travel journey begins here.</p>
            <?php if ($email) : ?>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
            <?php endif; ?>
        </div>

        <div class="user-info">
            <div>
                <?php if (isset($bookingsResult) && $bookingsResult->num_rows > 0) : ?>
                    <h2>Your Booked Packages</h2>
                    <?php while ($booking = $bookingsResult->fetch_assoc()) : ?>
                        <div class="booked-package">
                            <p><strong>Package Name:</strong> <?php echo $booking['package_name']; ?></p>
                            <p><strong>Destination:</strong> <?php echo $booking['destination']; ?></p>
                            <p><strong>Duration:</strong> <?php echo $booking['duration']; ?></p>
                            <p><strong>Price:</strong> <?php echo $booking['price']; ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No bookings found. Start your adventure now!</p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</body>

</html>
