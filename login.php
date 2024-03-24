<?php 
    require_once "./auth/account.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Log in :: EasyFit&reg;</title>
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

</head>

<body>

    <div class="main-wrapper">

        <?php @include("components/navbar.php"); ?>

        <div class="section">
            

            <div class="register-login-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-xl-5">

                        <div style="padding-bottom: 20px"></div>

                        <div class="register-login-form">
                            <h3 class="title section-padding">Login <span>Now</span></h3>
                            <div class="container">
                                <div class="form-wrapper">
                                    <?php
                                        if (isset($_SESSION['error_message'])) {
                                            ?>
                                            <div class="alert alert-danger" role="alert">
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
                                            <div class="alert alert-success" role="alert">
                                                <div class="alert-message text-center">
                                                    <?php echo $_SESSION['success_message']; ?>
                                                </div>
                                            </div>
                                            <?php
                                            unset($_SESSION['success_message']);
                                        }
                                    ?>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                        <div class="single-form">
                                            <input type="email" name="email" required placeholder="Email">
                                        </div>
                                        
                                        <div class="single-form">
                                            <input type="password" name="password" required placeholder="Password">
                                        </div>
                                        
                                        <div class="single-form">
                                            <button type="submit" name="user_login" class="button btn btn-secondary btn-hover-primary w-100" onclick="this.classList.toggle('button--loading')"><span class="button__text">Log In</span></button>
                                        </div>
                                        
                                        <p><a href="password-reset">Lost your password?</a></p>
                                        <p>No account? <a href="sign-up">Create one here.</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div style="padding-bottom: 60px"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section footer-section">

            <div class="footer-copyright">
                <div class="container">

                    <div class="copyright-wrapper">

                        <div class="copyright-text">
                            <p>&copy; <script>document.write(new Date().getFullYear());</script> <span> EasyHNF&reg; </span> All rights reserved.</p>
                        </div>

                        <div class="copyright-link">
                            <a href="terms">Terms of Service</a>
                            <a href="privacy">Privacy Policy</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>

    </div>

    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/video-playlist.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>