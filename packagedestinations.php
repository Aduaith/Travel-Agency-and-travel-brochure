

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Package destinations</title>
    <style>
        /* Style for the "Featured Destinations" heading */
        h2 {
            font-size: 40px;
            color: #3498db; /* Blue color for the heading */
            background-color: #f2f2f2; /* Background color for the heading */
            padding: 10px;
        }

        /* Style for each individual destination */
        .destination {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Style for Destination titles */
        h2.destination-title {
            font-size: 40px;
            color: #333;
            margin-bottom: 10px;
        }

        /* Style for Destination descriptions */
        p.destination-description {
            font-size: 50px;
            color: #555;
            line-height: 3.0;
        }
    </style>
</head>
<body>

<h2>Package Destinations</h2>
<?php
// current_destination.php
include 'connection.php';

$sql = "SELECT * FROM packagedestinations";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<h2>' . $row['destination'] . '</h2>';
        echo '</div>';
    }
} else {
    echo 'No destinations found.';
}

$connect->close();
?>
