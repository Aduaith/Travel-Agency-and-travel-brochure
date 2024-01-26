<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "travelbrochure"; // Modify if your database name is different

// Create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// This file will be included in other PHP files where database access is needed.
// You can add more backend logic and functions in this file as your project progresses.
?>
