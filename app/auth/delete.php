<?php
session_start();
// Connect database
include "./config/db.php";


// Delete Admin script
if (isset($_POST['delete_admin_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_admin WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Admin account deleted";
        echo "<meta http-equiv='refresh' content='3; URL=admins'>";
    }else{
        $_SESSION['error_message'] = "Error deleting admin account".mysqli_error($conn);
    }

}


// Delete Setting script
if (isset($_POST['delete_setting_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_settings WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Setting deleted";
        echo "<meta http-equiv='refresh' content='3; URL=settings'>";
    }else{
        $_SESSION['error_message'] = "Error deleting setting".mysqli_error($conn);
    }

}



// Delete Quote script
if (isset($_POST['delete_quote_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_quote WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Quote deleted";
        echo "<meta http-equiv='refresh' content='3; URL=quotes'>";
    }else{
        $_SESSION['error_message'] = "Error deleting quote".mysqli_error($conn);
    }

}



// Delete Category script
if (isset($_POST['delete_category_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_categories WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Category deleted";
        echo "<meta http-equiv='refresh' content='3; URL=categories'>";
    }else{
        $_SESSION['error_message'] = "Error deleting category".mysqli_error($conn);
    }

}



// Delete Branch script
if (isset($_POST['delete_branch_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_branches WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Branch deleted";
        echo "<meta http-equiv='refresh' content='3; URL=branches'>";
    }else{
        $_SESSION['error_message'] = "Error deleting branch".mysqli_error($conn);
    }

}


// Delete Media script
if (isset($_POST['delete_media_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_media WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Media deleted";
        echo "<meta http-equiv='refresh' content='3; URL=media'>";
    }else{
        $_SESSION['error_message'] = "Error deleting media".mysqli_error($conn);
    }

}


// Delete Pastor script
if (isset($_POST['delete_pastor_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_pastors WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Pastor deleted";
        echo "<meta http-equiv='refresh' content='3; URL=pastors'>";
    }else{
        $_SESSION['error_message'] = "Error deleting pastor".mysqli_error($conn);
    }

}



// Delete Devotional script
if (isset($_POST['delete_devotional_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_devotionals WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Devotional deleted";
        echo "<meta http-equiv='refresh' content='3; URL=devotionals'>";
    }else{
        $_SESSION['error_message'] = "Error deleting devotional".mysqli_error($conn);
    }

}



// Delete Event script
if (isset($_POST['delete_event_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_event WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Event deleted";
        echo "<meta http-equiv='refresh' content='3; URL=events'>";
    }else{
        $_SESSION['error_message'] = "Error deleting event".mysqli_error($conn);
    }

}