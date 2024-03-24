    <!-- Admin Delete Modal Start-->
    <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this user?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-user">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-user" name="delete_admin_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Delete Modal End-->


    <!-- Setting Delete Modal Start-->
    <div class="modal fade" id="settingDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this setting?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-setting">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-setting" name="delete_setting_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Setting Delete Modal End-->



    <!-- Quote Delete Modal Start-->
    <div class="modal fade" id="quoteDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this quote?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-quote">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-quote" name="delete_quote_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Delete Modal End-->



    <!-- Category Delete Modal Start-->
    <div class="modal fade" id="categoryDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this category?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-category">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-category" name="delete_category_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Delete Modal End-->



    <!-- Branch Delete Modal Start-->
    <div class="modal fade" id="branchDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this branch?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-branch">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-branch" name="delete_branch_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Branch Delete Modal End-->


    <!-- Media Delete Modal Start-->
    <div class="modal fade" id="mediaDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this media?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-media">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-media" name="delete_media_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Media Delete Modal End-->


    <!-- Pastor Delete Modal Start-->
    <div class="modal fade" id="pastorDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this pastor?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-pastor">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-pastor" name="delete_pastor_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Pastor Delete Modal End-->


    <!-- Devotional Delete Modal Start-->
    <div class="modal fade" id="devotionalDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this devotional?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-devotional">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-devotional" name="delete_devotional_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Devotional Delete Modal End-->



    <!-- Event Delete Modal Start-->
    <div class="modal fade" id="eventDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/svg/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this event?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-event">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-event" name="delete_event_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Delete Modal End-->