<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $adminID=$_POST['view_admin_id'];
    $select_query = "SELECT * FROM tbl_admin WHERE tbl_admin.id='$adminID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $userName = $row['userName'];
            $email = $row['email'];
            $designation = $row['designation'];
            $status = $row['status'];
            switch ($status) {
                case 0;
                    $class  = 'bg-danger';
                    $text = 'Inactive';
                    break;
                case 1;
                    $class  = 'bg-success';
                    $text = 'Active';
                    break;
                default:
                    $class  = '';
            }
?>
    <div class="col-sm-6 mb-3">
        <label class="form-label">First Name</label> 
        <input class="form-control" name="firstName" value="<?php echo $firstName; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Last Name</label> 
        <input class="form-control" name="lastName" value="<?php echo $lastName; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Username</label> 
        <input class="form-control" name="userName" value="<?php echo $userName; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Email</label> 
        <input class="form-control" name="email" value="<?php echo $email; ?>" type="email" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Designation</label> 
        <select class="form-select" name="designation" readonly>
            <option><?php echo $designation; ?></option>
        </select>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Status</label> 
        <select class="form-select" name="status" readonly>
            <option><?php echo $text; ?></option>
        </select>
    </div>
    <?php
        }
    }
    ?>
</div>