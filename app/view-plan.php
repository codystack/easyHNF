<?php
    $page = "My Plan";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
    if (!$subscription_plan) {
        $_SESSION['sub_error_message'] = "Upgrade your subscription to gain access to meal plans";
    }else {
        //Do Nothing
    }

    $plan_id = $_GET['id'];
                    
    $select_query = "SELECT * FROM custom_meal_plan WHERE plan_id ='$plan_id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $plan_id = $row['plan_id'];
            $plan_title = $row['plan_title'];
            $monday_breakfast = $row['monday_breakfast'];
            $monday_breakfast_calorie_count = $row['monday_breakfast_calorie_count'];
            $monday_lunch = $row['monday_lunch'];
            $monday_lunch_calorie_count = $row['monday_lunch_calorie_count'];
            $monday_snack = $row['monday_snack'];
            $monday_snack_calorie_count = $row['monday_snack_calorie_count'];
            $monday_dinner = $row['monday_dinner'];
            $monday_dinner_calorie_count = $row['monday_dinner_calorie_count'];
            $tuesday_breakfast = $row['tuesday_breakfast'];
            $tuesday_breakfast_calorie_count = $row['tuesday_breakfast_calorie_count'];
            $tuesday_lunch = $row['tuesday_lunch'];
            $tuesday_lunch_calorie_count = $row['tuesday_lunch_calorie_count'];
            $tuesday_snack = $row['tuesday_snack'];
            $tuesday_snack_calorie_count = $row['tuesday_snack_calorie_count'];
            $tuesday_dinner = $row['tuesday_dinner'];
            $tuesday_dinner_calorie_count = $row['tuesday_dinner_calorie_count'];
            $wednesday_breakfast = $row['wednesday_breakfast'];
            $wednesday_breakfast_calorie_count = $row['wednesday_breakfast_calorie_count'];
            $wednesday_lunch = $row['wednesday_lunch'];
            $wednesday_lunch_calorie_count = $row['wednesday_lunch_calorie_count'];
            $wednesday_snack = $row['wednesday_snack'];
            $wednesday_snack_calorie_count = $row['wednesday_snack_calorie_count'];
            $wednesday_dinner = $row['wednesday_dinner'];
            $wednesday_dinner_calorie_count = $row['wednesday_dinner_calorie_count'];
            $thursday_breakfast = $row['thursday_breakfast'];
            $thursday_breakfast_calorie_count = $row['thursday_breakfast_calorie_count'];
            $thursday_lunch = $row['thursday_lunch'];
            $thursday_lunch_calorie_count = $row['thursday_lunch_calorie_count'];
            $thursday_snack = $row['thursday_snack'];
            $thursday_snack_calorie_count = $row['thursday_snack_calorie_count'];
            $thursday_dinner = $row['thursday_dinner'];
            $thursday_dinner_calorie_count = $row['thursday_dinner_calorie_count'];
            $friday_breakfast = $row['friday_breakfast'];
            $friday_breakfast_calorie_count = $row['friday_breakfast_calorie_count'];
            $friday_lunch = $row['friday_lunch'];
            $friday_lunch_calorie_count = $row['friday_lunch_calorie_count'];
            $friday_snack = $row['friday_snack'];
            $friday_snack_calorie_count = $row['friday_snack_calorie_count'];
            $friday_dinner = $row['friday_dinner'];
            $friday_dinner_calorie_count = $row['friday_dinner_calorie_count'];
            $freestyle_breakfast = $row['freestyle_breakfast'];
            $freestyle_breakfast_calorie_count = $row['freestyle_breakfast_calorie_count'];
            $freestyle_lunch = $row['freestyle_lunch'];
            $freestyle_lunch_calorie_count = $row['freestyle_lunch_calorie_count'];
            $freestyle_snack = $row['freestyle_snack'];
            $freestyle_snack_calorie_count = $row['freestyle_snack_calorie_count'];
            $freestyle_dinner = $row['freestyle_dinner'];
            $freestyle_dinner_calorie_count = $row['freestyle_dinner_calorie_count'];
        }
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
                                <h2 class="ls-tight"><?php echo $plan_title; ?></h2>
                            </div>

                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <button onclick="history.back()" class="btn d-inline-flex btn-sm btn-dark"><span class="pe-2"><i class="bi bi-arrow-left"></i></span> <span> Go Back</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row g-3 g-xxl-6" style=" display: <?php if (!$subscription_plan){ echo 'none';}else { echo 'unset';}?>">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row row-cols-sm-2 row-cols-md-4 g-3">
                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Monday</span> 
                                                    <span class="d-block text-muted text-sm"><?php echo $monday_breakfast_calorie_count; ?></span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#mondayMealPlanModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Tuesday</span> 
                                                    <span class="d-block text-muted text-sm"><?php echo $tuesday_breakfast_calorie_count; ?></span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#tuesdayMealPlanModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Wednesday</span> 
                                                    <span class="d-block text-muted text-sm"><?php echo $wednesday_breakfast_calorie_count; ?></span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#wednesdayMealPlanModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Thursday</span> 
                                                    <span class="d-block text-muted text-sm"><?php echo $thursday_breakfast_calorie_count; ?></span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#thursdayMealPlanModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Friday</span> 
                                                    <span class="d-block text-muted text-sm"><?php echo $friday_breakfast_calorie_count; ?></span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#fridayMealPlanModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="card bg-warning bg-opacity-10 border-warning border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Freestyle Day</span> 
                                                    <span class="d-block text-muted text-sm"><?php echo $freestyle_breakfast_calorie_count; ?></span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#freestyleMealPlanModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-warning"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php 
include "./components/meal-plan-modal.php";
include "./components/footer.php";
?>