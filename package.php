<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Packages</title>
    <style>
        body {
            font-family: "Arial, sans-serif";
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4a90e2, #63d8f4); /* Add a light background color */
        }

        .package-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .package {
            width: 300px;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            background-color: #fff;
        }

        .package h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .package p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .book-now {
            display: block;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .book-now:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="package-container">

        <?php
        include 'connection.php';

        // Retrieve travel packages from the database
        $sql = "SELECT * FROM packages";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="package">';
                echo '<h3>' . $row["package_name"] . '</h3>';
                echo '<p>Destination: ' . $row["destination"] . '</p>';
                echo '<p>Duration: ' . $row["duration"] . '</p>';
                echo '<p>Price: $' . $row["price"] . '</p>';
                echo '<a href="book.php?package_id=' . $row["package_id"] . '&package_name=' . urlencode($row["package_name"]) . '&destination=' . urlencode($row["destination"]) . '&duration=' . urlencode($row["duration"]) . '&price=' . $row["price"] . '" class="book-now">Book Now</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No travel packages available at the moment.</p>';
        }

        // Close the database connection
        $connect->close();
        ?>

    </div>
</body>

</html>
