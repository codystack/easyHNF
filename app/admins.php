<?php
    $page = "Profile";
    include "./components/header.php";
    require_once "./auth/delete.php";

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
                                    <a href="new-admin" class="btn d-inline-flex btn-sm btn-neutral"><span class="pe-2"><i class="bi bi-plus-circle"></i></span> <span>Add New Admin</span></a>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-flush gap-6 overflow-x border-0 mt-4">
                            <li class="nav-item"><a href="profile" class="nav-link">General</a></li>
                            <li class="nav-item"><a href="security" class="nav-link">Password</a></li>
                            <li class="nav-item" style="display: <?php if($_SESSION['designation'] == "Admin"){echo 'none';}?>"><a href="admins" class="nav-link active">Admin Users</a></li>
                        </ul>
                    </header>

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
                                            <table id="settings" class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Full name</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Designation</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $select_query = "SELECT * FROM tbl_admin ORDER BY dateCreated ASC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['id'];
                                                                $firstName = $row['firstName'];
                                                                $lastName = $row['lastName'];
                                                                $email = $row['email'];
                                                                $userName = $row['userName'];
                                                                $designation = $row['designation'];
                                                                $status = $row['status'];
                                                                switch ($status) {
                                                                    case 0;
                                                                        $class  = 'bg-danger';
                                                                        $text = 'Inactive';
                                                                        break;
                                                                    case 1;
                                                                        $class  = 'bg-success';
                                                                        $text = 'Active';
                                                                        break;
                                                                    default:
                                                                        $class  = '';
                                                                }
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-person-fill"></i></div>
                                                                <div><span class="d-block text-heading fw-bold"><?php echo $firstName; ?> <?php echo $lastName; ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $userName; ?></td>
                                                        <td><?php echo $email; ?></td>
                                                        <td><?php echo $designation; ?></td>
                                                        <td class="d-none d-xl-table-cell">
                                                            <span class="badge badge-lg badge-dot"><i class="<?php echo $class;?>"></i><?php echo $text; ?></span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                            <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-xs">
                                                                    <li><a href="#" class="view_admin dropdown-item" id="<? echo $id; ?>"><i class="bi bi-eye me-2"></i>View</a></li>
                                                                    <li><a class="dropdown-item" href="edit-admin?id=<? echo $id; ?>"><i class="bi bi-pencil-square me-2"></i>Edit</a></li>
                                                                    <li><button type="button" class="dropdown-item" data-id="<? echo $id; ?>" onclick="confirmDelete(this);"><i class="bi bi-trash3 me-2"></i>Delete</button></li>
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