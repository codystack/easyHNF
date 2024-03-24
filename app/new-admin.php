<?php
    $page = "Profile";
    include "./components/header.php";
    require_once "./auth/queries.php";

    if ($_SESSION['designation'] == "Admin") {
        $_SESSION['admin_error_message'] = "You're not authorised to access this page";
    }else {

    }
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <header class="border-bottom mb-10">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12">
                                <h1 class="ls-tight">Account Settings</h1>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <button onclick="history.back()" class="btn d-inline-flex btn-sm btn-neutral"><span class="pe-2"><i class="bi bi-arrow-left"></i></span> <span>Go Back</span></button>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-flush gap-6 overflow-x border-0 mt-4">
                            <li class="nav-item"><a href="profile" class="nav-link">General</a></li>
                            <li class="nav-item"><a href="security" class="nav-link">Password</a></li>
                            <li class="nav-item"><a href="admins" class="nav-link active">Admins</a></li>
                        </ul>
                    </header>

                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
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
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">First Name</label> 
                                                <input class="form-control" name="firstName" placeholder="John" required type="text">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Last Name</label> 
                                                <input class="form-control" name="lastName" placeholder="Doe" required type="text">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Username</label> 
                                                <input class="form-control" name="userName" placeholder="johndoe" required type="text">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Email</label> 
                                                <input class="form-control" name="email" placeholder="example@gmail.com" required type="email">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Designation</label> 
                                                <select class="form-select" name="designation">
                                                    <option value="Admin">Admin</option>
                                                    <option value="Super-Admin">Super-Admin</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Password</label> 
                                                <input class="form-control" name="password" placeholder="********" required type="password">
                                            </div>
                                            <div class="mt-5 mb-10">
                                                <button type="submit" name="add_new_admin_btn" class="button btn w-100 btn-lg btn-dark" onclick="this.classList.toggle('button--loading')">
                                                    <span class="button__text">Add New Admin</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>