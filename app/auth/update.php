<?php
// Connect database
include "./config/db.php";

$id = $_GET['id'];
    

    //Update Admin Query
    if (isset($_POST['update_admin_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $userName = $conn->real_escape_string($_POST['userName']);
        $email = $conn->real_escape_string($_POST['email']);
        $designation = $conn->real_escape_string($_POST['designation']);
        $status = $conn->real_escape_string($_POST['status']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_admin where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_admin SET firstName='$firstName', lastName='$lastName', userName='$userName', email='$email', designation='$designation' WHERE id='$id'");
            $_SESSION['success_message'] = "Admin profile updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=admins'>";
        } else {
            $_SESSION['error_message'] = "Error updating admin profile.".mysqli_error($conn);
        }

    }


    //Update Setting Query
    if (isset($_POST['update_setting_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $title = $conn->real_escape_string($_POST['title']);
        $value = $conn->real_escape_string($_POST['value']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_settings where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_settings SET title='$title', value='$value' WHERE id='$id'");
            $_SESSION['success_message'] = "Setting updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=settings'>";
        } else {
            $_SESSION['error_message'] = "Error updating setting.".mysqli_error($conn);
        }

    }


    //Update Quote Query
    if (isset($_POST['update_quote_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $title = $conn->real_escape_string($_POST['title']);
        $link_path  = $conn->real_escape_string('upload/'.$_FILES['link']['name']);

        if (file_exists($link_path)){
            $link_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['link']['name']);
        }

        $checker = 0;

        //make sure file type is image
        if (preg_match("!image!", $_FILES['link']['type'])) {
            $checker ++;
        }
        if ($checker < 1){
            exit;
        }


        $sql=mysqli_query($conn,"SELECT * FROM tbl_quote where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_quote SET title='$title', link='$link_path' WHERE id='$id'");
            //copy image to upload folder
            copy($_FILES['link']['tmp_name'], $link_path);
            $_SESSION['success_message'] = "Quote updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=quotes'>";
        } else {
            $_SESSION['error_message'] = "Error updating quote.".mysqli_error($conn);
        }

    }


    //Update Category Query
    if (isset($_POST['update_category_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $category = $conn->real_escape_string($_POST['category']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_categories where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_categories SET category='$category' WHERE id='$id'");
            $_SESSION['success_message'] = "Category updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=categories'>";
        } else {
            $_SESSION['error_message'] = "Error updating category.".mysqli_error($conn);
        }

    }


    //Update Branch Query
    if (isset($_POST['update_branch_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
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


        $sql=mysqli_query($conn,"SELECT * FROM tbl_branches where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_branches SET branchName='$branchName', firstMeetingDay='$firstMeetingDay', firstMeetingActivity='$firstMeetingActivity', firstMeetingTime='$firstMeetingTime', secondMeetingDay='$secondMeetingDay', secondMeetingActivity='$secondMeetingActivity', secondMeetingTime='$secondMeetingTime', thirdMeetingDay='$thirdMeetingDay', thirdMeetingActivity='$thirdMeetingActivity', thirdMeetingTime='$thirdMeetingTime', address='$address', longitude='$longitude', latitude='$latitude' WHERE id='$id'");
            $_SESSION['success_message'] = "Branch updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=branches'>";
        } else {
            $_SESSION['error_message'] = "Error updating branch.".mysqli_error($conn);
        }

    }


    //Update Media Query
    if (isset($_POST['update_media_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $messageTitle = $conn->real_escape_string($_POST['messageTitle']);
        $preacher = $conn->real_escape_string($_POST['preacher']);
        $category = $conn->real_escape_string($_POST['category']);
        $date = $conn->real_escape_string($_POST['date']);
        $description = $conn->real_escape_string($_POST['description']);
        $audioLink = $conn->real_escape_string($_POST['audioLink']);
        $youtubeLink = $conn->real_escape_string($_POST['youtubeLink']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_media where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_media SET messageTitle='$messageTitle', preacher='$preacher', category='$category', date='$date', description='$description', audioLink='$audioLink', youtubeLink='$youtubeLink' WHERE id='$id'");
            $_SESSION['success_message'] = "media updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=media'>";
        } else {
            $_SESSION['error_message'] = "Error updating media.".mysqli_error($conn);
        }

    }


    //Update Pastor Query
    if (isset($_POST['update_pastor_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
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


        $sql=mysqli_query($conn,"SELECT * FROM tbl_pastors where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_pastors SET pastorName='$pastorName', branch='$branch', phone='$phone', photograph='$photograph_path' WHERE id='$id'");
            //copy image to upload folder
            copy($_FILES['photograph']['tmp_name'], $photograph_path);
            $_SESSION['success_message'] = "Pastor updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=pastors'>";
        } else {
            $_SESSION['error_message'] = "Error updating pastor.".mysqli_error($conn);
        }

    }


    //Update Devotional Query
    if (isset($_POST['update_devotional_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $topic = $conn->real_escape_string($_POST['topic']);
        $scripture = $conn->real_escape_string($_POST['scripture']);
        $memoryVerse = $conn->real_escape_string($_POST['memoryVerse']);
        $firstParagraph = $conn->real_escape_string($_POST['firstParagraph']);
        $secondParagraph = $conn->real_escape_string($_POST['secondParagraph']);
        $thirdParagraph = $conn->real_escape_string($_POST['thirdParagraph']);
        $prayer = $conn->real_escape_string($_POST['prayer']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_devotionals where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_devotionals SET topic='$topic', scripture='$scripture', memoryVerse='$memoryVerse', firstParagraph='$firstParagraph', secondParagraph='$secondParagraph', thirdParagraph='$thirdParagraph', prayer='$prayer' WHERE id='$id'");
            $_SESSION['success_message'] = "Devotional updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=devotionals'>";
        } else {
            $_SESSION['error_message'] = "Error updating devotional.".mysqli_error($conn);
        }

    }


    //Update Event Query
    if (isset($_POST['update_event_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
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


        $sql=mysqli_query($conn,"SELECT * FROM tbl_event where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_event SET eventTitle='$eventTitle', eventDate='$eventDate', eventTime='$eventTime', eventVenue='$eventVenue', eventType='$eventType', eventDescription='$eventDescription', eventFlyer='$eventFlyer_path' WHERE id='$id'");
            //copy image to upload folder
            copy($_FILES['eventFlyer']['tmp_name'], $eventFlyer_path);
            $_SESSION['success_message'] = "Event updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=events'>";
        } else {
            $_SESSION['error_message'] = "Error updating event.".mysqli_error($conn);
        }

    }