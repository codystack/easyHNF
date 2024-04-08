<?php
    $page = "My Plan";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
    if (!$subscription_plan) {
        $_SESSION['sub_error_message'] = "Upgrade your subscription to gain access to meal plans";
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
                                <h2 class="ls-tight">My  Plan</h2>
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
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
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
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#cryptoModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Wednesday</span> 
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#cryptoModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Thursday</span> 
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#cryptoModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Friday</span> 
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#cryptoModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Saturday</span> 
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#cryptoModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Sunday</span> 
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
                                                <span class="stretched-link ms-auto text-muted text-primary-hover" data-bs-target="#cryptoModal" data-bs-toggle="modal" role="button"><i class="bi bi-eye-fill text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card bg-warning bg-opacity-10 border-warning border-opacity-40">
                                            <div class="card-body d-flex gap-3">
                                                <img src="./assets/img/healthy-food.png" class="w-rem-8 h-rem-8 mt-1" alt="...">
                                                <div class="">
                                                    <span class="d-block mb-1 text-dark">Freestyle Day</span> 
                                                    <span class="d-block text-muted text-sm">Greek Yogurt, Apple & Almond</span>
                                                </div>
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
include "./components/modals.php";
include "./components/footer.php";
?>