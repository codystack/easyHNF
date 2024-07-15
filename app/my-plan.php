<?php
$page = "My Plan";
include "./components/header.php";
require_once "./auth/userinfo.php";
if (!$subscription_plan) {
    $_SESSION['sub_error_message'] = "Upgrade your subscription to gain access to meal plans";
} else {
    //Do Nothing
}
?>
<div class="d-flex flex-column flex-lg-row h-lg-100 gap-1" style=" display: <?php if (!$subscription_plan){echo 'none';}else {echo 'unset';} ?>">
    <?php include "./components/side-nav.php"; ?>
    <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
        <?php include "./components/topnav.php"; ?>
        <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
            <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                <div class="mb-6 mb-xl-10">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h2 class="ls-tight">My Plan</h2>
                        </div>
                    </div>
                </div>

                <div class="row g-3 g-xxl-6 mt-6" style="display: <?php if ($subscription_plan == 'Basic Plan'){echo 'unset';} elseif ($subscription_plan == 'Customized Plan' || 'Nutrition Coaching Plan') {echo 'none';}else{echo 'none';} ?>">
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
                                                            <span>Meal Plan Title</span>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Plan Info</th>
                                                    <th scope="col">Curated Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $mp_id = 1;
                                                $select_query = "SELECT * FROM basic_meal_plan CROSS JOIN userdiet WHERE basic_meal_plan.diet = userdiet.diet AND userdiet.userID = ".$_SESSION['user_id']." AND userdiet.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) ";
                                                $result = mysqli_query($conn, $select_query);
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $plan_title = $row['plan_title'];
                                                        $plan_id = $row['plan_id'];
                                                        $monday_breakfast = $row['monday_breakfast'];
                                                        $status = $row['status'];
                                                        $monday_lunch = $row['monday_lunch'];
                                                        $created_at = $row['created_at'];
                                                        $date = strtotime($created_at);
                                                        switch ($status) {
                                                            case "Inactive";
                                                                $class  = 'bg-warning';
                                                                $text = 'text-warning';
                                                                break;
                                                            case "Active";
                                                                $class  = 'bg-success';
                                                                $text = 'text-success';
                                                                break;
                                                            default:
                                                                $class  = '';
                                                        }
                                                ?>
                                                        <tr>
                                                            <td style="display: none"><?php echo $mp_id; ?></td>
                                                            <td>
                                                                <a href="view-basic-plan?id=<?php echo $plan_id; ?>">
                                                                    <div class="d-flex align-items-center gap-3 ps-1">
                                                                            <div class="icon icon-shape w-rem-10 h-rem-10 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-egg-fried"></i></div>
                                                                            <div><span class="d-block text-heading fw-bold"><?php echo $plan_title; ?></span></div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><?php echo $monday_breakfast; ?>, <?php echo $monday_lunch; ?>....</td>
                                                            <td><?php echo date('j F Y', $date); ?></td>
                                                            <td><span class="badge <? echo $class; ?> bg-opacity-25 text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                            <td class="text-end">
                                                                <a href="view-basic-plan?id=<?php echo $plan_id; ?>" class='btn btn-dark btn-sm'><i class="bi bi-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                        $mp_id++;
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

                <div class="row g-3 g-xxl-6 mt-6" style="display: <?php if ($subscription_plan == 'Customized Plan' or $subscription_plan == 'Nutrition Coaching Plan') {
                                                                        echo 'unset';
                                                                    } elseif ($subscription_plan == 'Basic Plan') {
                                                                        echo 'none';
                                                                    } else {
                                                                        echo 'none';
                                                                    } ?>">
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
                                                            <span>Meal Plan Title</span>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Plan Info</th>
                                                    <th scope="col">Curated Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $mp_id = 1;
                                                $select_query = "SELECT * FROM custom_meal_plan WHERE userID ='" . $_SESSION['user_id'] . "' ORDER BY created_at ASC";
                                                $result = mysqli_query($conn, $select_query);
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $plan_title = $row['plan_title'];
                                                        $plan_id = $row['plan_id'];
                                                        $monday_breakfast = $row['monday_breakfast'];
                                                        $status = $row['status'];
                                                        $monday_lunch = $row['monday_lunch'];
                                                        $created_at = $row['created_at'];
                                                        $date = strtotime($created_at);
                                                        switch ($status) {
                                                            case "Inactive";
                                                                $class  = 'bg-warning';
                                                                $text = 'text-warning';
                                                                break;
                                                            case "Active";
                                                                $class  = 'bg-success';
                                                                $text = 'text-success';
                                                                break;
                                                            default:
                                                                $class  = '';
                                                        }
                                                ?>
                                                        <tr>
                                                            <td style="display: none"><?php echo $mp_id; ?></td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-3 ps-1">
                                                                    <div class="icon icon-shape w-rem-10 h-rem-10 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-egg-fried"></i></div>
                                                                    <div><span class="d-block text-heading fw-bold"><?php echo $plan_title; ?></span></div>
                                                                </div>
                                                            </td>
                                                            <td><?php echo $monday_breakfast; ?>, <?php echo $monday_lunch; ?>....</td>
                                                            <td><?php echo date('j F Y', $date); ?></td>
                                                            <td><span class="badge <? echo $class; ?> bg-opacity-25 text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                            <td class="text-end">
                                                                <a href="view-plan?id=<?php echo $plan_id; ?>" class='btn btn-dark btn-sm'><i class="bi bi-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                        $mp_id++;
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
include "./components/footer.php";
?>