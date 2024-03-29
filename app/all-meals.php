<?php
    $page = "All Meals";
    include "./components/header.php";
    require_once "./auth/delete.php";
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
    
                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-6">
                                <div class="row g-6">
                                    <div class="col-xl-3 col-sm-6">
                                        
                                        <div class="card">
                                        <?php
                                        $select_query = "SELECT * FROM meals ORDER BY meal_id ASC";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $meal_id = $row['meal_id'];
                                                    $meal_code = $row['meal_code'];
                                                    $title = $row['title'];
                                                    $meal_image = $row['meal_image'];
                                            
                                        
                                            echo "<div class='position-relative group-item-hover'>";
                                                echo "<img src='https://admin.easyhnf.com/$meal_image' class='card-img-rounded' alt='...'>";
                                            echo "<div class='group-item rounded d-flex flex-column p-4 position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25'>
                                                    <div class='mt-auto'>
                                                        <a href='view-meal?id=$meal_id'>
                                                         <div class='gap-2'> <span class='h4 text-md text-white'>" .$title. "</span> </div>
                                                        <div class='gap-1 text-sm mb-2'>
                                                                <span class='text-white'>Meal Code: <span class='text-white fw-bold'>" .$meal_code. "</span></span> 
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>";
                                        
                                                }
                                            }
                                        ?>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="text-center mt-5">
                                    <a href="" class="btn btn-lg btn-dark">View All Meals</a>
                                </div>
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