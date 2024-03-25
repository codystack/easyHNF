<?php
    $page = "Subscription";
    include "./components/header.php";
    require_once "./auth/userinfo.php";
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
                                <h2 class="ls-tight">Subscription</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-md-1 g-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row g-3">
                                    <div class="col-md col-sm-6">
                                        <div class="card bg-danger bg-opacity-10 border-danger border-opacity-40">
                                            <div class="card-body py-4">
                                                <div class="align-items-center justify-content-center text-center mb-5">
                                                    <div class="flex-1">
                                                        <h6 class="h5 text-limit fw-semibold mb-1">Basic Plan</h6>
                                                        <p class="text-sm text-muted d-none d-sm-block">The perfect way to get started.</p>
                                                    </div>
                                                    <div class="ms-sm-auto">
                                                        <div class="align-items-center mt-5 mb-3 lh-none text-heading d-block display-5 ls-tight mb-0"><span class="fw-semibold text-2xl align-self-start mt-1 me-1">₦</span><span>10,000</span><span class="d-inline-block fw-normal text-muted text-lg mt-sm-3 ms-1">/ month</span></div>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                    <a href="" data-bs-target="#basicPlanModal" data-bs-toggle="modal" class="text-muted text-dark-hover text-sm fw-semibold"><i class="bi bi-info-circle text-danger"></i> Plan features</a>
                                                    <form id="paymentForm">
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="userID" placeholder="name@example.com" value="<?php echo $_SESSION['user_id']; ?>" disabled/>
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="first_name" value="<?php echo $_SESSION['first_name']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="last_name" value="<?php echo $_SESSION['last_name']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="subscription_plan" value="Basic Plan" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="amount" value="1000" disabled />
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div>
                                                                <button class="btn btn-sm btn-danger" type="submit" onclick="payWithPaystack()" style="<?php if($subscription_plan == ""){echo 'display: unset';}elseif($subscription_plan == "Basic Plan"){echo 'display: none';}else{echo 'display: unset';}?>">Subscribe</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-danger" type="button" disabled style="<?php if($subscription_plan == "Basic Plan"){echo 'display: unset';}else{echo 'display: none';}?>">Subscribed</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card bg-warning bg-opacity-10 border-warning border-opacity-40">
                                            <div class="card-body py-4">
                                                <div class="align-items-center justify-content-center text-center mb-5">
                                                    <div class="flex-1">
                                                        <h6 class="h5 text-limit fw-semibold mb-1">Customized Plan</h6>
                                                        <p class="text-sm text-muted d-none d-sm-block">The perfect way to get started.</p>
                                                    </div>
                                                    <div class="ms-sm-auto">
                                                        <div class="align-items-center mt-5 mb-3 lh-none text-heading d-block display-5 ls-tight mb-0"><span class="fw-semibold text-2xl align-self-start mt-1 me-1">₦</span><span>150,000</span><span class="d-inline-block fw-normal text-muted text-lg mt-sm-3 ms-1">/ month</span></div>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                    <a href="" data-bs-target="#customizedPlanModal" data-bs-toggle="modal" class="text-muted text-dark-hover text-sm fw-semibold"><i class="bi bi-info-circle text-warning"></i> Plan features</a>
                                                    <form id="paymentFormCustomized">
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="userID" placeholder="name@example.com" value="<?php echo $_SESSION['user_id']; ?>" disabled/>
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="first_name" value="<?php echo $_SESSION['first_name']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="last_name" value="<?php echo $_SESSION['last_name']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="customized_subscription_plan" value="Customized Plan" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="customizedAmount" value="3000" disabled />
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div>
                                                                <button class="btn btn-sm btn-warning text-white" type="submit" onclick="payWithPaystackCustomized()" style="<?php if($subscription_plan == ""){echo 'display: unset';}elseif($subscription_plan == "Customized Plan"){echo 'display: none';}else{echo 'display: unset';}?>">Subscribe</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-warning text-white" type="button" disabled style="<?php if($subscription_plan == "Customized Plan"){echo 'display: unset';}else{echo 'display: none';}?>">Subscribed</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card bg-success bg-opacity-10 border-success border-opacity-40">
                                            <div class="card-body py-4">
                                                <div class="align-items-center justify-content-center text-center mb-5">
                                                    <div class="flex-1">
                                                        <h6 class="h5 text-limit fw-semibold mb-1">Nutrition Coaching Plan</h6>
                                                        <p class="text-sm text-muted d-none d-sm-block">The perfect way to get started.</p>
                                                    </div>
                                                    <div class="ms-sm-auto">
                                                        <div class="align-items-center mt-5 mb-3 lh-none text-heading d-block display-5 ls-tight mb-0"><span class="fw-semibold text-2xl align-self-start mt-1 me-1">₦</span><span>450,000</span><span class="d-inline-block fw-normal text-muted text-lg mt-sm-3 ms-1">/ month</span></div>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                    <a href="" data-bs-target="#coachingPlanModal" data-bs-toggle="modal" class="text-muted text-success-hover text-sm fw-semibold"><i class="bi bi-info-circle text-success"></i> Plan features</a> 
                                                    <form id="paymentFormCoaching">
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="userID" placeholder="name@example.com" value="<?php echo $_SESSION['user_id']; ?>" disabled/>
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="first_name" value="<?php echo $_SESSION['first_name']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="last_name" value="<?php echo $_SESSION['last_name']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="coaching_subscription_plan" value="Nutrition Coaching Plan" disabled />
                                                        </div>
                                                        <div class="form-floating mb-3" style="display: none">
                                                            <input type="text" class="form-control" id="coachingAmount" value="6000" disabled />
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div>
                                                                <button class="btn btn-sm btn-success text-white" type="submit" onclick="payWithPaystackCoaching()" style="<?php if($subscription_plan == ""){echo 'display: unset';}elseif($subscription_plan == "Nutrition Coaching Plan"){echo 'display: none';}else{echo 'display: unset';}?>">Subscribe</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-success text-white" type="button" disabled style="<?php if($subscription_plan == "Nutrition Coaching Plan"){echo 'display: unset';}else{echo 'display: none';}?>">Subscribed</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 g-xxl-6 mt-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="table-responsive mb-10 mt-5">
                                            <table id="subscription" class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="display: none">SN</th>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Invoice Number</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Subscription Date</th>
                                                        <th scope="col">Transaction Reference</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $topup_id = 1;
                                                    $select_query = "SELECT * FROM subscription WHERE userID ='".$_SESSION['user_id']."' ORDER BY subscription_date ASC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $subscription_id = $row['subscription_id'];
                                                                $invoice_id = $row['invoice_id'];
                                                                $transaction_ref = $row['transaction_ref'];
                                                                $status = $row['status'];
                                                                $amount = $row['amount'];
                                                                $subscription_date = $row['subscription_date'];
                                                                $date = strtotime($subscription_date);
                                                                switch ($status) {
                                                                    case "failed";
                                                                        $class  = 'bg-warning';
                                                                        $text = 'text-warning';
                                                                        break;
                                                                    case "success";
                                                                        $class  = 'bg-success';
                                                                        $text = 'text-success';
                                                                        break;
                                                                    default:
                                                                        $class  = '';
                                                                }
                                                    ?>
                                                    <tr>
                                                        <td style="display: none"><?php echo $topup_id; ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="icon icon-shape w-rem-10 h-rem-10 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-receipt"></i></div>
                                                                <div><span class="d-block text-heading fw-bold"><?php echo $invoice_id; ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td>₦<?php echo number_format($amount, 2, '.', ','); ?></td>
                                                        <td><?php echo date('j F Y', $date); ?></td>
                                                        <td><?php echo $transaction_ref; ?></td>
                                                        <td><span class="badge <? echo $class; ?> bg-opacity-25 text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                        <td class="text-end">
                                                            <a href="view-subscription?id=<?php echo $subscription_id; ?>" class='btn btn-dark btn-sm'><i class="bi bi-eye"></i> View</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $topup_id++;
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
include "./components/footer.php";
?>