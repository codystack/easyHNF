<?php
    $page = "Media";
    include "./components/header.php";
    require_once "./auth/delete.php";
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
                                <h1 class="ls-tight">Media Library</h1>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <a href="new-media" class="btn d-inline-flex btn-sm btn-neutral"><span class="pe-2"><i class="bi bi-plus-circle"></i></span> <span>Add New Media File</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

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
    
                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="table-responsive mb-10 mt-5">
                                            <table id="media" class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Message Title</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Preacher</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $select_query = "SELECT * FROM tbl_media ORDER BY dateCreated ASC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['id'];
                                                                $messageTitle = $row['messageTitle'];
                                                                $description = $row['description'];
                                                                $preacher = $row['preacher'];
                                                                $category = $row['category'];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-collection-play-fill"></i></div>
                                                                <div><span class="d-block text-heading fw-bold"><?php echo $messageTitle; ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $description; ?></td>
                                                        <td><?php echo $preacher; ?></td>
                                                        <td><?php echo $category; ?></td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                            <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-xs">
                                                                    <li><a href="#" class="view_media dropdown-item" id="<? echo $id; ?>"><i class="bi bi-eye me-2"></i>View</a></li>
                                                                    <li><a class="dropdown-item" href="edit-media?id=<? echo $id; ?>"><i class="bi bi-pencil-square me-2"></i>Edit</a></li>
                                                                    <li><button type="button" class="dropdown-item" data-id="<? echo $id; ?>" onclick="confirmMediaDelete(this);"><i class="bi bi-trash3 me-2"></i>Delete</button></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
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
include "./components/delete-modals.php";
include "./components/footer.php";
?>