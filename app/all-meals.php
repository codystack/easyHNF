<?php
    $page = "All Meals";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
    if (!$subscription_plan) {
        $_SESSION['sub_error_message'] = "Upgrade your subscription to access meals";
    }else {
        //Do Nothing
    }
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h2 class="ls-tight">All Meals</h2>
                            </div>
                        </div>
                    </div>
    
                    <div class="row g-3 g-xxl-6" style=" display: <?php if (!$subscription_plan){ echo 'none';}else { echo 'unset';}?>">
                        <div class="col-xxl-12">
                            <div class="vstack gap-6">
                                <!-- <div class="row g-6">
                                    // <?php
                                    // $select_query = "SELECT * FROM meals ORDER BY meal_id ASC";
                                    //     $result = mysqli_query($conn, $select_query);
                                    //     if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            // while($row = mysqli_fetch_assoc($result)) {
                                            //     $meal_id = $row['meal_id'];
                                            //     $meal_code = $row['meal_code'];
                                            //     $title = $row['title'];
                                            //     $meal_image = $row['meal_image'];
                                    // ?>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card">
                                            <a href="view-meal?id=<?php //echo $meal_id; ?>">
                                                <div class="position-relative group-item-hover">
                                                    <img src="https://admin.easyhnf.com/<?php //echo $meal_image; ?>" class="card-img-rounded" alt="...">
                                                    <div class="group-item rounded d-flex flex-column p-4 position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25">
                                                        <div class="mt-auto">
                                                            <div class="gap-2"><span class="h4 text-md text-white"><?php //echo $title; ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    //     }
                                    // }
                                    ?>
                                    
                                </div> -->

                                <div class="row g-6">
                                    <?php
                                    $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                        $result = mysqli_query($conn, $select_date_query);
                                        // Check if there are results
                                        if (mysqli_num_rows($result) > 0) {
                                            // Fetch the ID
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $plan_id = $row['plan_id'];
                                                echo "ID from current month: $plan_id";
                                            }
                                        } else {
                                            $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                        }

                                    $select_query = "SELECT * FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.plan_id = '$plan_id'";
                                        $result = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $meal_id = $row['meal_id'];
                                                $meal_code = $row['meal_code'];
                                                $title = $row['title'];
                                                $meal_image = $row['meal_image'];
                                    
                                    ?>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card">
                                            <a href="view-meal?id=<?php echo $meal_id; ?>">
                                                <div class="position-relative group-item-hover">
                                                    <img src="https://admin.easyhnf.com/<?php echo $meal_image; ?>" class="card-img-rounded" alt="...">
                                                    <div class="group-item rounded d-flex flex-column p-4 position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25">
                                                        <div class="mt-auto">
                                                            <div class="gap-2"><span class="h4 text-md text-white"><?php echo $title; ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    
                                </div>

                                <!-- <div class="text-center mt-5">
                                    <a href="subscription"  class="btn btn-lg btn-danger" style="display: <?php if ($subscription_plan == "Basic Plan"){ echo 'unset';}else{ echo 'none';}?>">Upgrade to view all meal</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php
include "./components/modals.php";
include "./components/delete-modals.php";
include "./components/footer.php"; 
?>