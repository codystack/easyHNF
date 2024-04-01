<?php
    $page = "Subscription";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
    require_once "./auth/update.php";
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
                                <h2 class="ls-tight">Basic Diets</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-md-1 g-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row g-3">
                                    <h4 class="text-center mb-5"> Select Your prefered diet</h4>
                                    <div class="col-md col-sm-6">
                                        <?php
                                            if (isset($_SESSION['error_message'])) {
                                                ?>
                                                <div class="alert alert-danger mb-3" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php
                                                        echo $_SESSION['error_message'];
                                                        session_destroy();
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
                                                <div class="alert alert-success mb-3" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php echo $_SESSION['success_message']; ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['success_message']);
                                            }
                                        ?>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="number" class="form-control" name="userID" id="userID" value="<?php echo $_SESSION['user_id']; ?>"/>
                                            </div>
                                            <div class="row align-items-center g-3">
                                                <div class="col-md-2"><label class="form-label mb-0">Choose Diet</label></div>
                                                <div class="col-md-10 col-xl-12">
                                                    <div class="row mb-5">
                                                        <div class="col">
                                                            <div class="form-item-checkable">
                                                                <input class="form-item-check" type="radio" name="diet" value="1,200 Calories" id="12-calories" <?php if($diet == "1,200 Calories"){ echo 'checked';}else{} ?>> 
                                                                <label class="form-item cursor-pointer" for="12-calories">
                                                                    <span class="form-item-click d-inline-flex flex-column gap-3 align-items-center justify-content-center form-control w-rem-24 h-rem-24 text-center text-muted">
                                                                        <span class="fw-semibold text-xs">1,200<br>Calories</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="form-item-checkable">
                                                                <input class="form-item-check" type="radio" name="diet" value="1,500 Calories" id="1500-calories" <?php if($diet == "1,500 Calories"){ echo 'checked';}else{} ?>>
                                                                <label class="form-item cursor-pointer" for="1500-calories">
                                                                    <span class="form-item-click d-inline-flex flex-column gap-3 align-items-center justify-content-center form-control w-rem-24 h-rem-24 text-center text-muted">
                                                                        <span class="fw-semibold text-xs">1,500<br>Calories </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="form-item-checkable">
                                                                <input class="form-item-check" type="radio" name="diet" value="1,500 Calories High Protein" id="calories-high-protein" <?php if($diet == "1,500 Calories High Protein"){ echo 'checked';}else{} ?>> 
                                                                <label class="form-item cursor-pointer" for="calories-high-protein">
                                                                    <span class="form-item-click d-inline-flex flex-column gap-3 align-items-center justify-content-center form-control w-rem-24 h-rem-24 text-center text-muted">
                                                                        <span class="fw-semibold text-xs">1,500<br>Calories<br>High Protein </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="form-item-checkable">
                                                                <input class="form-item-check" type="radio" name="diet" value="1,500 Low Carb" id="low-carb" <?php if($diet == "1,500 Low Carb"){ echo 'checked';}else{} ?>> 
                                                                <label class="form-item cursor-pointer" for="low-carb">
                                                                    <span class="form-item-click d-inline-flex flex-column gap-3 align-items-center justify-content-center form-control w-rem-24 h-rem-24 text-center text-muted">
                                                                        <span class="fw-semibold text-xs">1,500<br>Low Carb</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="form-item-checkable">
                                                                <input class="form-item-check" type="radio" name="diet" value="1,500 DASH" id="dash" <?php if($diet == "1,500 DASH"){ echo 'checked';}else{} ?>> 
                                                                <label class="form-item cursor-pointer" for="dash">
                                                                    <span class="form-item-click d-inline-flex flex-column gap-3 align-items-center justify-content-center form-control w-rem-24 h-rem-24 text-center text-muted">
                                                                        <span class="fw-semibold text-xs">1,500<br>DASH</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="form-item-checkable">
                                                                <input class="form-item-check" type="radio" name="diet" value="Cholesterol Friendly Plan" id="cholesterol" <?php if($diet == "Cholesterol Friendly Plan"){ echo 'checked';}else{} ?>> 
                                                                <label class="form-item cursor-pointer" for="cholesterol">
                                                                    <span class="form-item-click d-inline-flex flex-column gap-3 align-items-center justify-content-center form-control w-rem-24 h-rem-24 text-center text-muted">
                                                                        <span class="fw-semibold text-xs">Cholesterol<br>Friendly Plan</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end mb-3">
                                                    <div>
                                                        <button class="btn btn-danger" name="diet_update-btn" type="submit">Save Diet</button>
                                                    </div>
                                                </div>
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

<?php
include "./components/footer.php";
?>