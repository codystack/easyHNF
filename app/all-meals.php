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
                                <div class="row g-6">
                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, monday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.monday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $monday_breakfast = $row['monday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, monday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.monday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $monday_lunch = $row['monday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, monday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.monday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $monday_snack = $row['monday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, monday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.monday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $monday_dinner = $row['monday_dinner'];
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

                                    <!-- Tuesday -->

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, tuesday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.tuesday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $tuesday_breakfast = $row['tuesday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, tuesday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.tuesday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $tuesday_lunch = $row['tuesday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, tuesday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.tuesday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $tuesday_snack = $row['tuesday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, tuesday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.tuesday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $tuesday_dinner = $row['tuesday_dinner'];
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

                                    <!-- Wednesday -->

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, wednesday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.wednesday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $wednesday_breakfast = $row['wednesday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, wednesday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.wednesday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $wednesday_lunch = $row['wednesday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, wednesday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.wednesday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $wednesday_snack = $row['wednesday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, wednesday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.wednesday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $wednesday_dinner = $row['wednesday_dinner'];
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

                                    <!-- Thursday -->

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, thursday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.thursday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $thursday_breakfast = $row['thursday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, thursday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.thursday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $thursday_lunch = $row['thursday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, thursday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.thursday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $thursday_snack = $row['thursday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, thursday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.thursday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $thursday_dinner = $row['thursday_dinner'];
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

                                    <!-- Friday -->

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, friday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.friday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $friday_breakfast = $row['friday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, friday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.friday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $friday_lunch = $row['friday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, friday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.friday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $friday_snack = $row['friday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, friday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.friday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $friday_dinner = $row['friday_dinner'];
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

                                    <!-- Saturday -->

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, saturday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.saturday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $saturday_breakfast = $row['saturday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, saturday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.saturday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $saturday_lunch = $row['saturday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, saturday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.saturday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $saturday_snack = $row['saturday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, saturday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.saturday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $saturday_dinner = $row['saturday_dinner'];
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

                                    <!-- Sunday -->

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, sunday_breakfast FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.sunday_breakfast = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $sunday_breakfast = $row['sunday_breakfast'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, sunday_lunch FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.sunday_lunch = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $sunday_lunch = $row['sunday_lunch'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, sunday_snack FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.sunday_snack = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $sunday_snack = $row['sunday_snack'];
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

                                    <?php
                                        $select_date_query = "SELECT * FROM basic_meal_plan INNER JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND userdiet.userID = '".$_SESSION['user_id']."'";
                                            $result = mysqli_query($conn, $select_date_query);
                                            // Check if there are results
                                            if (mysqli_num_rows($result) > 0) {
                                                // Fetch the ID
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $planID = $row['plan_id'];
                                                    // echo "ID from current month: $planID";
                                                }
                                            } else {
                                                $_SESSION['sub_error_message'] = "Buy a subscription plan to view meals";
                                            }

                                        $select_query = "SELECT meal_id, meal_image, title, sunday_dinner FROM meals INNER JOIN basic_meal_plan WHERE basic_meal_plan.sunday_dinner = meals.meal_id AND basic_meal_plan.plan_id = '$planID'";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                                    $sunday_dinner = $row['sunday_dinner'];
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