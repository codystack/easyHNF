<?php
    if ($_GET['status'] !== "success") {
        header("location:javascript://history.go(-1)");
    }

    $page = "Subscription";
    include "./components/header.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    
                    <div class="row row-cols-md-1 g-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row g-3">
                                    <div class="col">
                                        <div class="text-center mt-20">
                                            <div class="svg-container">
                                                <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                                    <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                                    <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                                </svg>
                                            </div>
                                            <div class="mt-6">
                                                <h5 class="h2 mb-1 fw-semibold">Subscription Successful👏</h5>
                                                <p class="mb-0">You are being redirected back to subscriptions.</p>
                                                <a href="subscription" class="btn btn-md btn-danger mt-5"><i class="bi bi-arrow-left me-2"></i>Go back</a>
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