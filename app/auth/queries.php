<?php
// Connect database
include "./config/db.php";


//New Admin Query
if (isset($_POST['add_new_admin_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $userName = $conn->real_escape_string($_POST['userName']);
    $password = $conn->real_escape_string($_POST['password']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $picture = $conn->real_escape_string($_POST['picture']);

    $check_user_query = "SELECT * FROM tbl_admin WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Admin Already Exist!";
    }else {
        // Finally, register admin if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO tbl_admin (firstName, lastName, userName, email, password, picture, designation, status) 
  			        VALUES('$firstName', '$lastName', '$userName', '$email', '$password', 'assets/img/memoji/memoji-2.svg', '$designation', '1')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Admin Account Created";
            echo "<meta http-equiv='refresh' content='3; URL=new-admin'>";
        }else {
            $_SESSION['error_message'] = "Error creating account".mysqli_error($conn);
        }
    }
}



//New Settings Query
if (isset($_POST['add_new_settings_btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
    $value = $conn->real_escape_string($_POST['value']);

    $check_query = "SELECT * FROM tbl_settings WHERE title='$title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Setting Already Exist!";
    }else {
        
        $query = "INSERT INTO tbl_settings (title, value) 
  			        VALUES('$title', '$value')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Setting Added";
            echo "<meta http-equiv='refresh' content='3; URL=settings'>";
        }else {
            $_SESSION['error_message'] = "Error adding new setting".mysqli_error($conn);
        }
    }
}



//New Quote Query
if(isset($_POST['add_new_quote_btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
    $photograph_path = $conn->real_escape_string('upload/'.$_FILES['link']['name']);

    if (file_exists($photograph_path)){
        $photograph_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['link']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['link']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }

    $query = "INSERT INTO tbl_quote (title, link) 
  			        VALUES('$title', '$photograph_path')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        //copy image to upload folder
        copy($_FILES['link']['tmp_name'], $photograph_path);
        $_SESSION['success_message'] = "Quote Added";
        echo "<meta http-equiv='refresh' content='3; URL=quotes'>";
    }else {
        $_SESSION['error_message'] = "Error adding quote".mysqli_error($conn);
    }

}



//New Category Query
if (isset($_POST['add_new_category_btn'])) {

    $category = $conn->real_escape_string($_POST['category']);


    $check_query = "SELECT * FROM tbl_categories WHERE category='$category'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Category Already Exist!";
    }else {

        $query = "INSERT INTO tbl_categories (category) 
  			        VALUES('$category')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Category Added";
            echo "<meta http-equiv='refresh' content='3; URL=categories'>";
        }else {
            $_SESSION['error_message'] = "Error adding category".mysqli_error($conn);
        }
    }
}



//New Branch Query
if (isset($_POST['add_new_branch_btn'])) {

    $branchName = $conn->real_escape_string($_POST['branchName']);
    $firstMeetingDay = $conn->real_escape_string($_POST['firstMeetingDay']);
    $firstMeetingActivity = $conn->real_escape_string($_POST['firstMeetingActivity']);
    $firstMeetingTime = $conn->real_escape_string($_POST['firstMeetingTime']);
    $secondMeetingDay = $conn->real_escape_string($_POST['secondMeetingDay']);
    $secondMeetingActivity = $conn->real_escape_string($_POST['secondMeetingActivity']);
    $secondMeetingTime = $conn->real_escape_string($_POST['secondMeetingTime']);
    $thirdMeetingDay = $conn->real_escape_string($_POST['thirdMeetingDay']);
    $thirdMeetingActivity = $conn->real_escape_string($_POST['thirdMeetingActivity']);
    $thirdMeetingTime = $conn->real_escape_string($_POST['thirdMeetingTime']);
    $address = $conn->real_escape_string($_POST['address']);
    $longitude = $conn->real_escape_string($_POST['longitude']);
    $latitude = $conn->real_escape_string($_POST['latitude']);


    $check_query = "SELECT * FROM tbl_branches WHERE branchName='$branchName'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Church Branch Already Exist!";
    }else {
        $query = "INSERT INTO tbl_branches (branchName, firstMeetingDay, firstMeetingActivity, firstMeetingTime, secondMeetingDay, secondMeetingActivity, secondMeetingTime, thirdMeetingDay, thirdMeetingActivity, thirdMeetingTime, address, longitude, latitude) 
  			        VALUES('$branchName', '$firstMeetingDay', '$firstMeetingActivity', '$firstMeetingTime', '$secondMeetingDay', '$secondMeetingActivity', '$secondMeetingTime', '$thirdMeetingDay', '$thirdMeetingActivity', '$thirdMeetingTime', '$address', '$longitude', '$latitude')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Church Branch Added";
            echo "<meta http-equiv='refresh' content='3; URL=branches'>";
        }else {
            $_SESSION['error_message'] = "Error adding church branch".mysqli_error($conn);
        }
    }
}



//New Media Query
if (isset($_POST['add_new_media_btn'])) {

    $messageTitle = $conn->real_escape_string($_POST['messageTitle']);
    $preacher = $conn->real_escape_string($_POST['preacher']);
    $category = $conn->real_escape_string($_POST['category']);
    $date = $conn->real_escape_string($_POST['date']);
    $description = $conn->real_escape_string($_POST['description']);
    $audioLink = $conn->real_escape_string($_POST['audioLink']);
    $youtubeLink = $conn->real_escape_string($_POST['youtubeLink']);

    $check_query = "SELECT * FROM tbl_media WHERE messageTitle='$messageTitle'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Media Already Exist!";
    }else {
        $query = "INSERT INTO tbl_media (messageTitle, preacher, category, date, description, audioLink, youtubeLink) 
  			        VALUES('$messageTitle', '$preacher', '$category', '$date', '$description', '$audioLink', '$youtubeLink')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Media Added";
            echo "<meta http-equiv='refresh' content='3; URL=media'>";
        }else {
            $_SESSION['error_message'] = "Error adding media".mysqli_error($conn);
        }
    }
}




//New Pastor Query
if(isset($_POST['add_new_pastor_btn'])) {

    $pastorName = $conn->real_escape_string($_POST['pastorName']);
    $branch = $conn->real_escape_string($_POST['branch']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $photograph_path = $conn->real_escape_string('upload/'.$_FILES['photograph']['name']);

    if (file_exists($photograph_path)){
        $photograph_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['photograph']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['photograph']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }

    $query = "INSERT INTO tbl_pastors (pastorName, branch, phone, photograph) 
  			        VALUES('$pastorName', '$branch', '$phone', '$photograph_path')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        //copy image to upload folder
        copy($_FILES['photograph']['tmp_name'], $photograph_path);
        $_SESSION['success_message'] = "Pastor Added";
        echo "<meta http-equiv='refresh' content='3; URL=pastors'>";
    }else {
        $_SESSION['error_message'] = "Error adding pastor".mysqli_error($conn);
    }

}




//New Devotional Query
if (isset($_POST['add_new_devotional_btn'])) {

    $topic = $conn->real_escape_string($_POST['topic']);
    $scripture = $conn->real_escape_string($_POST['scripture']);
    $memoryVerse = $conn->real_escape_string($_POST['memoryVerse']);
    $firstParagraph = $conn->real_escape_string($_POST['firstParagraph']);
    $secondParagraph = $conn->real_escape_string($_POST['secondParagraph']);
    $thirdParagraph = $conn->real_escape_string($_POST['thirdParagraph']);
    $prayer = $conn->real_escape_string($_POST['prayer']);


    $check_query = "SELECT * FROM tbl_devotionals WHERE topic='$topic'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Devotional Already Exist!";
    }else {
        $query = "INSERT INTO tbl_devotionals (topic, scripture, memoryVerse, firstParagraph, secondParagraph, thirdParagraph, prayer) 
  			        VALUES('$topic', '$scripture', '$memoryVerse', '$firstParagraph', '$secondParagraph', '$thirdParagraph', '$prayer')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Devotional Added";
            echo "<meta http-equiv='refresh' content='3; URL=devotionals'>";
        }else {
            $_SESSION['error_message'] = "Error adding devotional".mysqli_error($conn);
        }
    }
}



//New Event Query
if (isset($_POST['add_new_event_btn'])) {

    $eventTitle = $conn->real_escape_string($_POST['eventTitle']);
    $eventDate = $conn->real_escape_string($_POST['eventDate']);
    $eventTime = $conn->real_escape_string($_POST['eventTime']);
    $eventVenue = $conn->real_escape_string($_POST['eventVenue']);
    $eventType = $conn->real_escape_string($_POST['eventType']);
    $eventDescription = $conn->real_escape_string($_POST['eventDescription']);
    $eventFlyer_path = $conn->real_escape_string('upload/'.$_FILES['eventFlyer']['name']);

    if (file_exists($eventFlyer_path)){
        $eventFlyer_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['eventFlyer']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['eventFlyer']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }


    $check_query = "SELECT * FROM tbl_event WHERE eventTitle='$eventTitle'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Event Already Exist!";
    }else {
        $query = "INSERT INTO tbl_event (eventTitle, eventDate, eventTime, eventVenue, eventType, eventDescription, eventFlyer) 
  			        VALUES('$eventTitle', '$eventDate', '$eventTime', '$eventVenue', '$eventType', '$eventDescription', '$eventFlyer_path')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            //copy image to upload folder
            copy($_FILES['eventFlyer']['tmp_name'], $eventFlyer_path);
            $_SESSION['success_message'] = "Event Added";
            echo "<meta http-equiv='refresh' content='3; URL=events'>";
        }else {
            $_SESSION['error_message'] = "Error adding event".mysqli_error($conn);
        }
    }
}