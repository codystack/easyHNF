<?php
session_start();

//Connect database
include "./config/db.php";

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $query = "UPDATE users SET verified=1 WHERE token='$token'";

        if (mysqli_query($conn, $query)) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = true;
            header('location: verified');
            exit(0);
        }
    }else {
        $_SESSION['message_title'] = "User not found!";
        $_SESSION['message'] = "It seems this user is not registered yet";
    }
}else {
    $_SESSION['message_title'] = "No token provided!";
    $_SESSION['message'] = "Please try again";
}
