<nav class="flex-none navbar navbar-vertical navbar-expand-lg navbar-light bg-transparent show vh-lg-100 px-0 py-2" id="sidebar">
    <div class="container-fluid px-3 px-md-4 px-lg-6">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-inline-block py-lg-1 mb-lg-5" href="./">
            <img src="assets/img/easyhnf-logo-dark.png" class="logo-dark h-rem-16 h-rem-md-16 mx-auto" alt="Logo">
            <img src="assets/img/easyhnf-logo-light.png" class="logo-light h-rem-16 h-rem-md-16 mx-auto" alt="Logo">
        </a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <div class="avatar avatar-sm text-bg-secondary rounded-circle">
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    </div>
                    <div class="d-none d-sm-block ms-3"><span class="h6">Heritage</span></div>
                    <div class="d-none d-md-block ms-md-2"><i class="bi bi-chevron-down text-muted text-xs"></i></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="dropdown-header">
                        <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                        <span class="d-block text-heading fw-semibold"><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="profile"><i class="bi bi-person-gear me-3"></i>Profile</a>
                    <a class="dropdown-item" style="display: <?php if($_SESSION['designation'] == "Admin"){echo 'none';}?>" href="settings"><i class="bi bi-gear me-3"></i>Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left me-3"></i>Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse overflow-x-hidden" id="sidebarCollapse">

            <ul class="navbar-nav">
                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Dashboard'){echo 'active';}?>" href="./"><i class="bi bi-grid-1x2-fill"></i> <span>Overview</span></a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Booking'){echo 'active';}?>" href="booking"><i class="bi bi-calendar-date-fill"></i> <span>Book a Session</span> </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Subscription'){echo 'active';}?>" href="subscription"><i class="bi bi-bookmarks-fill"></i> <span>Subscription</span></a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='My Plan'){echo 'active';}?>" href="my-plan"><i class="bi bi-book-fill"></i> <span>My Plan</span></a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='All Meals'){echo 'active';}?>" href="all-meals"><i class="bi bi-egg-fried"></i> <span>All Meals</span></a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Podcast'){echo 'active';}?>" href="podcast"><i class="bi bi-collection-play-fill"></i> <span>Podcast</span></a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill" href="javascript:void(Tawk_API.toggle())"><i class="bi bi-headset"></i> <span>Support</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span>
                    </a>
                </li>
            </ul>

            <hr class="navbar-divider my-5 opacity-70">

            <ul class="navbar-nav">
                <li>
                    <span class="nav-link text-xs fw-semibold text-uppercase text-muted ls-wide">Settings</span>
                </li>
                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Profile'){echo 'active';}?>" href="profile"><i class="bi bi-person-fill-gear"></i> <span>My Account</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span>
                    </a>
                </li>
            </ul>

            <div class="mt-auto"></div>

            <div class="card bg-dark border-0 mt-5 mb-3">
                <div class="card-body">
                    <a href="logout" class="btn btn-sm btn-danger w-100">Log Out<i class="bi bi-box-arrow-left ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>