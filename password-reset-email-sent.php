<?php 
    session_start();

    if (!isset($_SESSION['email'])) {
        header('location: ./');
    }
    if (isset($_GET['close'])) {
        session_destroy();
        unset($_SESSION['email']);
        header("location: ./login");
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EasyFit&reg; :: Health, Nutrition & Fitness</title>
    <meta name="robots" content="noindex, follow" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/easy-favicon.png">

    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
            .tick {
                stroke-opacity: 0;
                stroke-dasharray: 29px;
                stroke-dashoffset: 29px;
                animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                animation-delay: .6s
            }

            .circle {
                fill-opacity: 0;
                stroke: #219a00;
                stroke-width: 16px;
                transform-origin: center;
                transform: scale(0);
                animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;
            }
        }

        @keyframes grow {
            60% {
                transform: scale(.8);
                stroke-width: 4px;
                fill-opacity: 0;
            }
            100% {
                transform: scale(.9);
                stroke-width: 8px;
                fill-opacity: 1;
                fill: #219a00;
            }
        }

        @keyframes draw {
            0%, 100% { stroke-opacity: 1; }
            100% { stroke-dashoffset: 0; }
        }

    </style>

</head>

<body>
    <div class="main-wrapper">

        <div class="section">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
                            <div class="py-6 py-lg-0">
                                <div class="row justify-content-center">
                                    <div class="text-center">
                                        <div class="svg-container">
                                            <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                                <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                                <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                            </svg>
                                        </div>
                                        <div style="margin-top: 20px">
                                            <h6 class="h3 mb-1">Password Reset Email Sent 👏</h6>
                                            <p class="h6 mb-0">An email with a reset link has been sent to your email (<?php echo $_SESSION['email']; ?>)</p>
                                            <p class="h6 mb-0">Check spam box if you're yet to receive the email.</p>
                                            <hr class="mb-2 mt-2">
                                            <form method="get" style="margin-top: 20px">
                                                <button class="btn btn-secondary" name="close" type="submit">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/main.js"></script>
    <script>
        const btn = document.querySelector(".button");

        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>

</body>

</html>