<?php
session_start();
// Connect database
include "./config/db.php";

// Login script
if (isset($_POST['admin_login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $status = $conn->real_escape_string($_POST['status']);
    $userName = $conn->real_escape_string($_POST['userName']);
    $designation = $conn->real_escape_string($_POST['designation']);

    $password = sha1($password);
    $query = "SELECT * FROM tbl_admin WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $designation = $row['designation'];
        $userName = $row['userName'];
        $picture = $row['picture'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['userName'] = $userName;
        $_SESSION['designation'] = $designation;
        $_SESSION['status'] = $status;
        $_SESSION['id'] = $id;
        if ($status == 1){
            $_SESSION['success_message'] = "Login Successful..You're being redirected"; 
        }if ($status == 0) {
            $_SESSION['error_message'] = "Your account is not active";
        }
    }else {
        $_SESSION['error_message'] = "Incorrect Login Details";
    }
}