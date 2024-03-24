<?php
    $page = "New Devotional";
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
                                    <h1 class="h4 ls-tight">Add New Devotional</h1>
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
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Topic</label> 
                                        <input class="form-control" required placeholder="Topic" name="topic" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Scripture</label> 
                                        <input class="form-control" required placeholder="Scripture" name="scripture" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Memory verse</label> 
                                        <input class="form-control" required placeholder="Meeting day's" name="memoryVerse" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">1st Paragraph</label> 
                                        <textarea class="form-control" required placeholder="1st Paragraph" name="firstParagraph" row="7" type="text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">2nd Paragraph</label> 
                                        <textarea class="form-control" required placeholder="2nd Paragraph" name="secondParagraph" row="7" type="text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">3rd Paragraph</label> 
                                        <textarea class="form-control" required placeholder="3rd Paragraph" name="thirdParagraph" row="7" type="text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Prayer</label> 
                                        <textarea class="form-control" required placeholder="Prayer" name="prayer" row="7" type="text"></textarea>
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" name="add_new_devotional_btn" class="button btn w-100 btn-lg btn-dark"  onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Add New Devotional</span>
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