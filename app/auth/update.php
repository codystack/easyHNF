<?php
// Connect database
include "./config/db.php";


    //Update Diet Query
    if (isset($_POST['diet_update-btn'])) {

        $userID = isset($_GET['userID']) ? $_GET['userID'] : '';

        $diet_id = $conn->real_escape_string($_POST['diet_id']);
        $userID = $conn->real_escape_string($_POST['userID']);
        $diet = $conn->real_escape_string($_POST['diet']);
        $status = $conn->real_escape_string($_POST['status']);

    
        $check_query = "SELECT * FROM user_diet WHERE userID='".$_SESSION['user_id']."'";
        $result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($result) > 0) {

            $conn=mysqli_query($conn,"UPDATE user_diet SET diet='$diet', status='Active' WHERE userID='".$_SESSION['user_id']."'");
            $_SESSION['success_message'] = "<strong>Success!</strong> New Diet Swapped";

        }else {
            $query = "INSERT INTO user_diet (userID, diet, status) 
                          VALUES('$userID', '$diet', 'Active')";
                          
            mysqli_query($conn, $query);
            if (mysqli_affected_rows($conn) > 0) {
    
                $_SESSION['success_message'] = "<strong>Success!</strong> New Diet Added";

            }else {
                $_SESSION['error_message'] = "Error adding diet".mysqli_error($conn);
            }
        }
    }



    if (isset($_POST[''])) {

        $diet_id = $conn->real_escape_string($_POST['diet_id']);
        $userID = $conn->real_escape_string($_POST['userID']);
        $diet = $conn->real_escape_string($_POST['diet']);
        $status = $conn->real_escape_string($_POST['status']);

        
        $sql=mysqli_query($conn,"SELECT * FROM user_diet WHERE userID='".$_SESSION['user_id']."'");
        $result=mysqli_fetch_array($sql);
        if($result>0){

            $dietquery = "INSERT INTO user_diet (userID, diet, status)VALUES('$userID', '$diet', '$status')";
            $_SESSION['success_message'] = "Diet Added 👍";
            echo "<meta http-equiv='refresh' content='3; URL=basic-diets'>";

        }else {
            $_SESSION['error_message'] = "Error updating diet.".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='3; URL=basic-diets'>";
        }

    }



    if (isset($_POST[''])) {

        $diet_id = $conn->real_escape_string($_POST['diet_id']);
        $userID = $conn->real_escape_string($_POST['userID']);
        $diet = $conn->real_escape_string($_POST['diet']);
        $status = $conn->real_escape_string($_POST['status']);

        
        $sql=mysqli_query($conn,"SELECT * FROM user_diet WHERE userID='".$_SESSION['user_id']."'");
        $result=mysqli_fetch_array($sql);
        if($result>0){

            $conn=mysqli_query($conn,"UPDATE user_diet SET userID='$userID', diet='$diet', status='$status' WHERE userID='".$_SESSION['user_id']."'");
            $_SESSION['success_message'] = "Diet Swapped 👍";
            echo "<meta http-equiv='refresh' content='3; URL=basic-diets'>";

        }elseif($result<0){

            $dietquery = "INSERT INTO user_diet (userID, diet, status)VALUES('$userID', '$diet', '$status')";
            $_SESSION['success_message'] = "Diet Added 👍";
            echo "<meta http-equiv='refresh' content='3; URL=basic-diets'>";

        }else {
            $_SESSION['error_message'] = "Error updating diet.".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='3; URL=basic-diets'>";
        }

    }
