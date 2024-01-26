<?php
session_start();

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $connect->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT user_id, username, password, usertype FROM users WHERE username=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result === false) {
        die("Error: " . $connect->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Check if the entered password matches the admin password for admin users
        $isAdmin = ($row['usertype'] === 'admin' && $password === '24816');

        // Check if the entered password is the admin password for admin users
        if ($row['usertype'] === 'admin' && $password !== '24816') {
            die('Login failed. Invalid admin password.');
        }

        if (password_verify($password, $hashedPassword) || $isAdmin) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['usertype'] = $row['usertype'];

            if ($row['usertype'] === 'admin' && $password === '24816') {
                header("Location: adminportal.html");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "Login failed. Invalid password.";
        }
    } else {
        echo "Login failed. User not found.";
    }

    $stmt->close();
    $connect->close();
}
?>
