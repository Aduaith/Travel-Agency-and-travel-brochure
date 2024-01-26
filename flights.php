<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
   <style>
        /* Add your CSS styles for the hotel module here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
        }
        .flights {
            background-color: #fff;
            border: 1px solid #ccc;
            margin: 20px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .flights h2 {
            color: #333;
        }
        .flights p {
            color: #666;
        }
    </style>
</head>
<body>
<div class="flights">
<?php
        include 'connection.php';

        // Retrieve travel packages from the database
        $sql = "SELECT * FROM flight";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="flight">';
                echo '<h3>' . $row["flightname"] . '</h3>';
                echo '<p>Price: ' . $row["price"] . '</p>';
                echo '<a href="flightbook.php?flight_id=' . $row["flight_id"] . '&flightname=' . urlencode($row["flightname"]) . '&price=' . urlencode($row["price"]) . '" class="book-now">Book Now</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No flights available at the moment.</p>';
        }

        // Close the database connection
        $connect->close();
        ?>

    </div>
</body>

</html>