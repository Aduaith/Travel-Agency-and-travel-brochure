<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        body {
            font-family: "Arial, sans-serif";
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        #bookingDetails {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        #bookingDetails h2 {
            color: #3498db;
        }

        #bookingDetails p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        #bookingDetails strong {
            font-weight: bold;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div id="bookingDetails">
        <h2>Booking Details</h2>
        <form action="fprocess_booking.php" method="post">
            <!-- Remove the input fields for username and email -->
            <h2>Travel Package Details</h2>
            <p><strong>flight Name:</strong> <?php echo $_GET['flightname'] ?? ''; ?></p>
            <p><strong>Price:</strong> <?php echo $_GET['price'] ?? ''; ?></p>
            <!-- Add hidden input fields to store package information -->
            <input type="hidden" name="flightname" value="<?php echo $_GET['flightname'] ?? ''; ?>">
            <input type="hidden" name="price" value="<?php echo $_GET['price'] ?? ''; ?>">
            <!-- Add a submit button -->
            <button type="submit" name="submit">Proceed to Pay</button>
        </form>
    </div>
</body>

</html>
