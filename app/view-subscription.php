<?php
$page = "Subscription";
include "./components/header.php";
include "./config/db.php";
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
                                <h1 class="h4 ls-tight">Subscription Detail</h1>
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
                    <div class="card" id="invoice">
                        <?php
                        $subscription_id = $_GET['id'];

                        $select_query = "SELECT * FROM subscription WHERE subscription_id ='$subscription_id'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                $subscription_id = $row['subscription_id'];
                                $transaction_ref = $row['transaction_ref'];
                                $amount = $row['amount'];
                                $subscription_date = $row['subscription_date'];
                                $payment_method = $row['payment_method'];
                                $status = $row['status'];
                                $invoice_id = $row['invoice_id'];
                                $date = strtotime($subscription_date);
                                switch ($status) {
                                    case "failed";
                                        $class  = 'bg-danger';
                                        $text  = 'text-danger';
                                        break;
                                    case "success";
                                        $class  = 'bg-success';
                                        $text  = 'text-success';
                                        break;
                                    case "pending";
                                        $class  = 'bg-warning';
                                        $text  = 'text-warning';
                                        break;
                                    default:
                                        $class  = '';
                                }
                        ?>
                                <div class="card-body">

                                    <div class="d-flex justify-content-between mb-6">
                                        <div>
                                            <a href="#" onclick="window.print()" class="print-link no-print"><i class="bi bi-printer"></i></a>
                                        </div>
                                    </div>

                                    <div class="text-center mb-10">
                                        <div class="mb-3">
                                            <img alt="" src="./assets/svg/bill.svg" class="img-responsive" width="80" height="80">
                                        </div>
                                        <h4 class="mb-n3">Transaction Reference</h4>
                                        <div class="d-flex justify-content-center mt-4">
                                            <div>
                                                <img src="./assets/img/barcode.png">
                                            </div>
                                            &nbsp;
                                            <div style="margin-top: 2px;">
                                                <span><?php echo $transaction_ref; ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-md-3 col-4 mx-auto d-flex justify-content-center mt-3 bg-light-primary px-1 py-2 wallet-border">
                                            <div>
                                                <span class="fs-6">PAYMENT STATUS:</span>
                                            </div>
                                            &nbsp;
                                            <div style="">
                                                <span class='badge <? echo $class; ?> bg-opacity-25 <? echo $text; ?>'> <?php echo $status; ?> </span>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p class="mb-0 mt-3"><b>Thank you for your payment!</b></p>
                                            <p class="mb-0">A successful payment was made for your subscription.<br>See purchase details below.</p>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="container mt-10 mb-10">
                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6">INVOICE FROM</span>
                                                <h5>Easy Health and Fitness Solutions </h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end">INVOICE TO</span>
                                                    <h5><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6">INVOICED ID</span>
                                                <h6><?php echo $invoice_id; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6">PAYMENT DATE</span>
                                                    <h6><?php echo date('j F Y', $date); ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <div class="col-md-6 col-lg-6 col-12">
                                                <span class="fs-6">PAID AMOUNT</span>
                                                <h5>₦<?php echo number_format($amount, 2, '.', ','); ?></h5>
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end">MODE OF PAYMENT</span>
                                                    <h5 class="text-capitalize"><?php echo $payment_method; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-10">
                                        <h4 class="mb-0">Need help? Got questions to ask?</h4>
                                        <span>Contact us our support team via: <a href="mailto:support@easyhnf.com" class="text-danger">support@easyhnf.com</a></span>
                                    </div>
                                    <div class="row mt-4 no-print mb-10">
                                        <div class="text-center mx-auto">
                                            <button class="btn btn-danger" onclick="window.print()"><i class="bi bi-download"></i> Download Invoice </button>
                                            <button class="btn btn-dark" onclick="history.back()"><i class="bi bi-arrow-left"></i> Go back</button>
                                        </div>
                                    </div>
                                    <hr />
                                    <p class="mt-10 mb-5 text-center">Notes: Invoice was created on a computer and is valid
                                        without the signature and seal.</p>

                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php include "./components/footer.php"; ?>