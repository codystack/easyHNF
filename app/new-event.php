<?php
    $page = "New Event";
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
                                    <h1 class="h4 ls-tight">Add New Event</h1>
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
                                <form class="row mb-5 mt-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Title</label> 
                                        <input class="form-control" required name="eventTitle" placeholder="Title" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Date of event</label> 
                                        <input class="form-control" required name="eventDate" placeholder="Date of event" type="date">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Time of event</label> 
                                        <input class="form-control" required name="eventTime" placeholder="Meeting day's" type="time">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Venue</label> 
                                        <input class="form-control" required name="eventVenue" placeholder="Venue" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="flyerUpload">Upload Flyer</label>
                                        <input type="file" required name="eventFlyer" class="form-control" id="flyerUpload">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Event Type</label> 
                                        <select class="form-select" required name="eventType">
                                            <option>Event</option>
                                            <option>Article</option>
                                            <option>Banner</option>
                                            <option>Banner & Event</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label> 
                                        <textarea class="form-control" required name="eventDescription" placeholder="Description" type="text"></textarea>
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" name="add_new_event_btn" class="button btn w-100 btn-lg btn-dark"  onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Add New Event</span>
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