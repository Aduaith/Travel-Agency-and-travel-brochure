<?php
// Include the existing database connection file (connection.php)
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $destinationName = $_POST["destinationName"];
    $description = $_POST["description"];

    // Insert data into the destinationsmodule table
    $query = "INSERT INTO destinationsmodule (destinationName, description) VALUES ('$destinationName', '$description')";

    // Perform the query
    $result = $connect->query($query);

    // Check if the query was successful
    if ($result) {
        echo "Destination added successfully!";
    } else {
        echo "Error: " . $connect->error;
    }
}
?>
