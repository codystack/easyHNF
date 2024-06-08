<?php
//Connect email sending
require_once "./auth/emails/password-reset-mail.php";

session_start();

//Connect database
include "./config/db.php";


// Password reset query
if (isset($_POST['password_reset'])) {

  $email = $conn->real_escape_string($_POST['email']);

  // ensure that the user exists
  $query = "SELECT email FROM users WHERE email='$email'";
  $token = bin2hex(random_bytes(50)); // generate unique token

  $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) == 0) {
        $_SESSION['error_message'] = "User with this email does not exist!";
    }else {
        // Finally, save user email if there are no errors
        $query = "INSERT INTO password_reset (email, token) 
  			        VALUES('$email', '$token')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            sendPasswordResetEmail($email, $token);

            $_SESSION['email'] = $email;
            header('location: password-reset-email-sent');
        }else {
            $_SESSION['error_message']    = "Error resetting password";
        }
    }
}



// Save New Password Query
if (isset($_POST['new_password'])) {

    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_new_password = mysqli_real_escape_string($conn, $_POST['confirm_new_password']);
  
    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if($email){

        $new_password = sha1($new_password);
        $sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
        $results = mysqli_query($conn, $sql);

        $_SESSION['success_message'] = "Password Reset Successful";
        echo "<meta http-equiv='refresh' content='5; URL=login'>";
        
    }else{
        $_SESSION['error_message'] = "Error Resetting Password".mysqli_error($conn);
    }
  }