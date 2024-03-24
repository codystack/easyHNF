<?php
    $page = "Settings";
    include "./components/header.php";
    require_once "./auth/update.php";

    if ($_SESSION['designation'] == "Admin") {
        $_SESSION['admin_error_message'] = "You're not authorised to access this page";
    }else {

    }

    $id = $_GET['id'];
    $select_query = "SELECT * FROM tbl_settings WHERE id='$id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $value = $row['value'];
        }
    }
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
                                    <h1 class="h4 ls-tight">Edit Settings</h1>
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
                                    <div class="alert alert-danger mt-5 mb-5" role="alert">
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
                                    <div class="alert alert-success mt-5 mb-5" role="alert">
                                        <div class="alert-message text-center">
                                            <?php echo $_SESSION['success_message']; ?>
                                        </div>
                                    </div>
                                    <?php
                                    unset($_SESSION['success_message']);
                                }
                            ?>
                                <form class="row mb-5 mt-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="mb-3 col-md-6" style="display: none;">
                                        <label class="form-label" for="id">ID</label>
                                        <input type="text" class="form-control form-control-lg" name="id" value="<?php echo $id; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Title</label> 
                                        <input class="form-control" placeholder="Value" name="title" value="<?php echo $title; ?>" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Value</label> 
                                        <input class="form-control" placeholder="Value" name="value" value="<?php echo $value; ?>" type="text">
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" name="update_setting_btn" class="button btn w-100 btn-lg btn-dark" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Update Settings</span>
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