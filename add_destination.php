<?php
// add_destination.php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destinationName = $_POST['destinationName'];
    $description = $_POST['description'];

    $sql = "INSERT INTO destinationsmodule (destinationName, description) VALUES ('$destinationName', '$description')";

    if ($connect->query($sql) === TRUE) {
        echo 'Destination added successfully!';
    } else {
        echo 'Error adding destination: ' . $connect->error;
    }
}

$connect->close();
?>
