<?php
    $page = "New Branch";
    include "./components/header.php";
    require_once "./auth/queries.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-6 pb-10">
                    <header class="py-10">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="d-flex align-items-center gap-4">
                                    <div><button type="button" onclick="history.back()" class="btn-close text-xs" aria-label="Close"></button></div>
                                    <div class="vr opacity-20 my-1"></div>
                                    <h1 class="h4 ls-tight">Add New Branch</h1>
                                </div>
                            </div>
                            <div class="col-auto d-none d-md-block">
                                <div class="hstack gap-2 justify-content-end">
                                    <button onclick="history.back()" class="btn d-inline-flex btn-sm btn-neutral"><span class="pe-2"><i class="bi bi-arrow-left"></i></span> <span>Go Back</span></button>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container">
                        <div class="card">
                            <div class="card-body pb-0">
                                <?php
                                    if (isset($_SESSION['error_message'])) {
                                        ?>
                                        <div class="alert alert-danger mt-5" role="alert">
                                            <div class="alert-message text-center">
                                                <?php
                                                echo $_SESSION['error_message'];
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
                                        <div class="alert alert-success mt-5" role="alert">
                                            <div class="alert-message text-center">
                                                <?php echo $_SESSION['success_message']; ?>
                                            </div>
                                        </div>
                                        <?php
                                        unset($_SESSION['success_message']);
                                    }
                                ?>
                                <form class="row mb-5 mt-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Branch Name</label> 
                                        <input class="form-control" required name="branchName" placeholder="Branch name" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">1st Meeting Day's</label> 
                                        <input class="form-control" required name="firstMeetingDay" placeholder="Meeting day's" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">1st Meeting Activity</label> 
                                        <input class="form-control"required name="firstMeetingActivity" placeholder="1st Activity" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">1st Meeting Time</label> 
                                        <input class="form-control" required name="firstMeetingTime" placeholder="1st Activity"type="time">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">2nd Meeting Day's</label> 
                                        <input class="form-control" required name="secondMeetingDay" placeholder="Meeting day's" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">2nd Meeting Activity</label> 
                                        <input class="form-control" required name="secondMeetingActivity" placeholder="2nd Activity" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">2nd Meeting Time</label> 
                                        <input class="form-control" required name="secondMeetingTime" placeholder="2nd Activity" type="time">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">3rd Meeting Day's</label> 
                                        <input class="form-control" required name="thirdMeetingDay" placeholder="Meeting day's" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">3rd Meeting Activity</label> 
                                        <input class="form-control" required name="thirdMeetingActivity" placeholder="1st Activity" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">3rd Meeting Time</label> 
                                        <input class="form-control" required name="thirdMeetingTime" placeholder="1st Activity" type="time">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label> 
                                        <textarea class="form-control" required name="address" placeholder="Address" row="5" type="text"></textarea>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Longitude</label> 
                                        <input class="form-control" required name="longitude" placeholder="Longitude" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Latitude</label> 
                                        <input class="form-control" required name="latitude" placeholder="Latitude" type="text">
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" name="add_new_branch_btn" class="button btn w-100 btn-lg btn-dark" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Add New Branch</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>