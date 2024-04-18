<?php
    $page = "Subscription";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
    require_once "./auth/update.php";
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
                                <h2 class="ls-tight">Basic Diets</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-md-1 g-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row g-3">
                                    <h4 class="text-center mb-5"> Select Your prefered diet</h4>
                                    <div class="col-md col-sm-6">
                                        <?php
                                            if (isset($_SESSION['error_message'])) {
                                                ?>
                                                <div class="alert alert-danger mb-3" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php
                                                        echo $_SESSION['error_message'];
                                                        session_destroy();
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['error_message']);
                                            }
                                        ?>
                                        <?php
                                            if (isset($_SESSION['success_message'])) {
                                                ?>
                                                <div class="alert alert-success mb-3" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php echo $_SESSION['success_message']; ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['success_message']);
                                            }
                                        ?>
                                        
                                            <div class="row align-items-center g-3">
                                                <div class="col-md-2"><label class="form-label mb-0">Choose Diet</label></div>
                                                <div class="col-md-10 col-xl-12">
                                                    <div class="row mb-5 g-3 g-xl-6">
                                                        
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card">
                                                                <div class="card-body pb-5">
                                                                    <form id="paymentForm">
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="userID" placeholder="name@example.com" value="<?php echo $_SESSION['user_id']; ?>" />
                                                                        </div>
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="first_name" value="<?php echo $_SESSION['first_name']; ?>" />
                                                                        </div>
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="last_name" value="<?php echo $_SESSION['last_name']; ?>" />
                                                                        </div>
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" />
                                                                        </div>
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="subscription_plan" value="Basic Plan" />
                                                                        </div>
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="diet" value="<?php echo $title; ?>" />
                                                                        </div>
                                                                        <div class="form-floating mb-3" style="display: none">
                                                                            <input type="text" class="form-control" id="amount" value="<?php echo $price; ?>" />
                                                                        </div>
                                                                        <div class="">
                                                                            <button class="stretched-link h6 mb-2" style="display: contents" type="submit" onclick="payWithPaystack()"></button>
                                                                            <h6 class="d-block mb-2 text-heading fw-bold"><?php echo $title; ?></h6>
                                                                            <div class="d-flex justify-content-between gap-4">
                                                                                <div class=""><span class="d-block text-sm text-muted">Basic Plan</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
include "./components/footer.php";
?>