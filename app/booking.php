<?php
    $page = "Branches";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
    if (!$subscription_plan) {
        $_SESSION['sub_error_message'] = "Upgrade your subscription to book a session";
    }elseif ($subscription_plan == "Basic Plan") {
        $_SESSION['sub_error_message'] = "Upgrade your subscription to book a session";
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
                    <div class="mb-0 mb-xl-0">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h2 class="ls-tight">Book a Session</h2>
                                <p>Schedule an appointment with our dietitian.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 g-xxl-6 mt-0" style=" display: <?php if (!$subscription_plan){ echo 'none';}elseif ($subscription_plan == "Basic Plan"){ echo 'none';}else{ echo 'unset';}?>">
                        <div class="col-xxl-12 mt-0">
                            <div class="calendly-inline-widget mb-0 mt-0" style="min-width:320px; height:630px;" data-url="https://calendly.com/easyhnf"></div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php 
include "./components/footer.php"; 
?>