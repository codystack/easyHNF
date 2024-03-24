<?php
// Connect database
include "./config/db.php";


$select_query = "SELECT * FROM users WHERE user_id ='".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $select_query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $picture = $row['picture'];
        $subscription_plan = $row['subscription_plan'];
    }
}