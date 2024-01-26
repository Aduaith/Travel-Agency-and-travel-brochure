<?php
session_start();

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $userType = $_POST['userType'];

    // Set a default password for admin
    $adminPassword = '24816';

    // Check if the entered password matches the admin password
    $is_admin = ($userType === 'admin' && $password === $adminPassword) ? 1 : 0;

    // Validate input
    if ($password !== $confirmPassword) {
        die('Password and Confirm Password do not match');
    }

    // Check if the entered password is the admin password for admin users
    if ($userType === 'admin' && $password !== $adminPassword) {
        die('Login failed. Invalid admin password.');
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password, usertype, is_admin) VALUES ('$username', '$email', '$hashedPassword', '$userType', $is_admin)";

    if ($connect->query($sql) === TRUE) {
        echo 'Registration successful!';

        if ($userType === 'admin' && $password === $adminPassword) {
            header("Location: adminportal.html");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . $connect->error;
    }

    $connect->close();
}
?>
