<?php
    $page = "All Meals";
    include "./components/header.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                    <?php
                    $meal_id = $_GET['id'];
                    
                    $select_query = "SELECT * FROM meals WHERE meal_id ='$meal_id'";
                    $result = mysqli_query($conn, $select_query);
                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $meal_id = $row['meal_id'];
                        $meal_image = $row['meal_image'];
                        $title = $row['title'];
                        $meal_code = $row['meal_code'];
                        $ingredients = $row['ingredients'];
                        $instructions = $row['instructions'];
                        $notes = $row['notes'];
                        $nutrition = $row['nutrition'];
                        $status = $row['status'];
                        $invoice_id = $row['invoice_id'];
                        $date = strtotime($subscription_date);
                        switch ($status) {
                            case "failed";
                                $class  = 'bg-danger';
                                $text  = 'text-danger';
                                break;
                            case "success";
                                $class  = 'bg-success';
                                $text  = 'text-success';
                                break;
                            case "pending";
                                $class  = 'bg-warning';
                                $text  = 'text-warning';
                                break;
                            default:
                                $class  = '';
                        }
                ?>
                <main class="container-fluid" style="padding: unset">
                    <div class="mb-6 mb-xl-10" style="background-image: url(https://admin.easyhnf.com/<?php echo $meal_image; ?>);height: 400px;background-repeat: no-repeat;background-position: center;background-size: cover;">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
    
                   <div class="container px-16">
                        <div class="row align-items-center">
                            <div class="text-center mb-10 mt-5">
                               <h1><?php echo $title; ?></h1>
                               <h5 class="mt-2">Meal Code: <?php echo $meal_code; ?></h5>
                            </div>

                            <div class="col-sm-4 col-12">
                                <h2 class="ls-tight">Ingredients</h2>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <div class="d-flex wprm-decoration-line" style="width: 100%;height: 1px;/* border: 1px solid #0f172a; */background-color: #0f172a;"></div>
                                </div>
                            </div>
                            <div class="mb-20 mt-5">
                               <?php echo $ingredients; ?>
                            </div>

                            <div class="col-sm-4 col-12">
                                <h2 class="ls-tight">Direction</h2>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <div class="d-flex wprm-decoration-line" style="width: 100%;height: 1px;/* border: 1px solid #0f172a; */background-color: #0f172a;"></div>
                                </div>
                            </div>
                            <div class="mb-20 mt-5">
                               <?php echo $instructions; ?>
                            </div>

                            <div class="col-sm-4 col-12">
                                <h2 class="ls-tight">Notes</h2>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <div class="d-flex wprm-decoration-line" style="width: 100%;height: 1px;/* border: 1px solid #0f172a; */background-color: #0f172a;"></div>
                                </div>
                            </div>
                            <div class="mb-20 mt-5">
                               <?php echo $notes; ?>
                            </div>

                            <div class="col-sm-4 col-12">
                                <h2 class="ls-tight">Nutrition Info</h2>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <div class="d-flex wprm-decoration-line" style="width: 100%;height: 1px;/* border: 1px solid #0f172a; */background-color: #0f172a;"></div>
                                </div>
                            </div>
                            <div class="mb-20 mt-5">
                               <?php echo $nutrition; ?>
                            </div>
                        </div>
                   </div>
                </main>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
include "./components/modals.php";
include "./components/delete-modals.php";
include "./components/footer.php"; 
?>