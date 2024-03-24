    <!-- View branch modal start-->
    <div class="modal fade" id="viewBranchModal" tabindex="-1" aria-labelledby="viewBranchModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-buildings-fill"></i></div>
                    <div>
                        <h5 class="mb-1">Branch Detials</h5>
                    </div>
                </div>
                <div class="modal-body" id="branch_info">
                    <?php @include("../view/view-branch.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View branch modal end-->


    <!-- View user modal start-->
    <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-body row">
                    <div class="text-center mb-5">
                        <img src="assets/img/memoji/memoji-2.svg" class="avatar-sm w-rem-48 h-rem-48 rounded-circle">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Full Name</label> 
                        <input class="form-control" placeholder="Branch name" value="Joseph Dokhare" type="text" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Email</label> 
                        <input class="form-control" placeholder="Pastor" value="ebuzzadvert@gmail.com" type="text" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Phone Number</label> 
                        <input class="form-control" placeholder="Meeting day's" value="+2348162680095" type="text" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Date Joined</label> 
                        <input class="form-control" placeholder="Latitude" value="21 / 1 / 2024" type="text" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View user modal end-->


    <!-- View pastor modal start-->
    <div class="modal fade" id="viewPastorModal" tabindex="-1" aria-labelledby="viewPastorModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-person-fill"></i></div>
                    <div>
                        <h5 class="mb-1">Pastor's Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="pastor_info">
                    <?php @include("../view/view-pastor.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View pastor modal end-->


    <!-- View settings modal start-->
    <div class="modal fade" id="viewSettingsModal" tabindex="-1" aria-labelledby="viewSettingsModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-gear-fill"></i></div>
                    <div>
                        <h5 class="mb-1">Settings Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="settings_details">
                    <?php @include("../view/view-settings.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View settings modal end-->


    <!-- View devotional modal start-->
    <div class="modal fade" id="viewDevotionalModal" tabindex="-1" aria-labelledby="viewDevotionalModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-book-fill"></i></div>
                    <div>
                        <h5 class="mb-1">Devotional Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="devotional_info">
                    <?php @include("../view/view-devotional.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View devotional modal end-->


    <!-- View quote modal start-->
    <div class="modal fade" id="viewQuoteModal" tabindex="-1" aria-labelledby="viewQuoteModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-quote"></i></div>
                    <div>
                        <h5 class="mb-1">Quote Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="quote_info">
                    <?php @include("../view/view-quotes.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View quote modal end-->


    <!-- View event modal start-->
    <div class="modal fade" id="viewEventModal" tabindex="-1" aria-labelledby="viewEventModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-body" id="event_info">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View event modal end-->


    <!-- View media modal start-->
    <div class="modal fade" id="viewMediaModal" tabindex="-1" aria-labelledby="viewMediaModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4"><i class="bi bi-collection-play-fill"></i></div>
                    <div>
                        <h5 class="mb-1">Media Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="media_infos">
                    <?php @include("../view/view-media.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View media modal end-->


    <!-- View admin modal start-->
    <div class="modal fade" id="viewAdminModal" tabindex="-1" aria-labelledby="viewAdminModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content shadow-3">
                <div class="modal-header justify-content-start">
                    <div class="icon icon-shape rounded-3 bg-primary-subtle text-primary text-lg me-4">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Admin Details</h5>
                    </div>
                </div>
                <div class="modal-body" id="admin_info">
                    <?php @include("../view/view-admin.php");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View admin modal end-->