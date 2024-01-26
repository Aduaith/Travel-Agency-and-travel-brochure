<!-- add_package.php -->
<?php
include 'connection.php';

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $packageName = $_POST['package_name'];
    $destination = $_POST['destination'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];

    // Insert the new travel package into the packages table
    $insertPackageQuery = "INSERT INTO packages (package_name, destination, duration, price) 
                           VALUES ('$packageName', '$destination', '$duration', '$price')";

    if ($connect->query($insertPackageQuery) === TRUE) {
        // Package added successfully
        echo 'Travel package added successfully!';
    } else {
        // Error adding package
        echo 'Error adding travel package: ' . $connect->error;
    }
}

// Close the database connection
$connect->close();
?>
