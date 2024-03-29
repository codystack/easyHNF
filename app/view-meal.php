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
                        $amount = $row['amount'];
                        $subscription_date = $row['subscription_date'];
                        $payment_method = $row['payment_method'];
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
                    <div class="mb-6 mb-xl-10" style="    background-image: url(https://admin.easyhnf.com/<?php echo $meal_image; ?>);height: 400px;background-repeat: no-repeat;background-position: center;background-size: cover;">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
    
                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-6">
                                <div class="row g-6">
                                    <div class="col-xl-3 col-sm-6">
                                    
                                        
                                    </div>
                                    
                                </div>
                                <div class="text-center mt-5">
                                    <a href="" class="btn btn-lg btn-dark">View All Meals</a>
                                </div>
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