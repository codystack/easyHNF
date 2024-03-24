<?php
    $page = "Events";
    include "./components/header.php";
    require_once "./auth/update.php";

    $id = $_GET['id'];
    $select_query = "SELECT * FROM tbl_event WHERE id='$id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $eventTitle = $row['eventTitle'];
            $eventDate = $row['eventDate'];
            $eventTime = $row['eventTime'];
            $eventVenue = $row['eventVenue'];
            $eventType = $row['eventType'];
            $eventFlyer = $row['eventFlyer'];
            $eventDescription = $row['eventDescription'];
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
                                    <h1 class="h4 ls-tight">Edit Events</h1>
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
                                <form class="row mb-5 mt-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3 col-md-6" style="display: none;">
                                        <label class="form-label" for="id">ID</label>
                                        <input type="text" class="form-control form-control-lg" name="id" value="<?php echo $id; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Title</label> 
                                        <input class="form-control" name="eventTitle" placeholder="Title" value="<?php echo $eventTitle; ?>" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Date of event</label> 
                                        <input class="form-control" name="eventDate" placeholder="Date of event" value="<?php echo $eventDate; ?>" type="date">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Time of event</label> 
                                        <input class="form-control" name="eventTime" placeholder="Meeting day's" value="<?php echo $eventTime; ?>" type="time">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Venue</label> 
                                        <input class="form-control" name="eventVenue" placeholder="Venue" value="<?php echo $eventVenue; ?>" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="flyerUpload">Upload Flyer</label>
                                        <input type="file" required name="eventFlyer" value="<?php echo $eventFlyer; ?>" required  class="form-control" id="flyerUpload">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Event Type</label> 
                                        <select class="form-select" name="eventType">
                                            <option><?php echo $eventType; ?></option>
                                            <option>Event</option>
                                            <option>Article</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label> 
                                        <textarea class="form-control" name="eventDescription" placeholder="Description" type="text"><?php echo $eventDescription; ?></textarea>
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" name="update_event_btn" class="button btn w-100 btn-lg btn-dark" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Update Event</span>
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