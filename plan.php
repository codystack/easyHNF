<?php
@include("components/header.php");
?>

<body>

    <div class="main-wrapper">

        <?php @include("./components/navbar.php"); ?>


        <div class="overlay"></div>

        <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">

                <div class="page-banner-content">
                    <h2 class="page-title">Plans</h2>
                </div>
            </div>
        </div>
        
        <div class="section section-padding bg-grey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="pricing">
                            <div class="plan">
                                <h2>Basic</h2>
                                <div class="price"><small style="font-size: .575em">₦</small>10,000<small style="font-size: .575em">/month</small></div>
                                <ul class="features">
                                    <li><i class="fas fa-check-circle"></i> 1 basic meal plan</li>
                                    <li><i class="fas fa-check-circle"></i> 5+ Diets plan</li>
                                    <li><i class="fas fa-check-circle"></i> Newsletters & podcast</li>
                                </ul>
                                <!-- <button>Signup</button> -->
                            </div>
                            <div class="plan popular">
                                <h2>Custom</h2>
                                <div class="price"><small style="font-size: .575em">₦</small>150,000<small style="font-size: .575em">/month</small></div>
                                <ul class="features">
                                    <li><i class="fas fa-check-circle"></i> Custom-made meal plan</li>
                                    <li><i class="fas fa-check-circle"></i> Two 1-on-1 consultation session</li>
                                    <li><i class="fas fa-check-circle"></i> Weekly followup</li>
                                    <li><i class="fas fa-check-circle"></i> Newsletters & podcast</li>
                                    <li><i class="fas fa-check-circle"></i> Recipe videos</li>
                                    <li><i class="fas fa-check-circle"></i> 20% discount on renewal</li>
                                </ul>
                                <!-- <button>Buy Now</button> -->
                            </div>
                            <div class="plan">
                                <h2>Nutrition Coaching</h2>
                                <div class="price"><small style="font-size: .575em">₦</small>450,000<small style="font-size: .575em">/month</small></div>
                                <ul class="features">
                                    <li><i class="fas fa-check-circle"></i> Custom-made meal plan</li>
                                    <li><i class="fas fa-check-circle"></i> 1-on-1 meal prep training</li>
                                    <li><i class="fas fa-check-circle"></i> Two 1-on-1 consultation session</li>
                                    <li><i class="fas fa-check-circle"></i> Weekly followup</li>
                                    <li><i class="fas fa-check-circle"></i> Newsletters & podcast</li>
                                    <li><i class="fas fa-check-circle"></i> Recipe videos</li>
                                    <li><i class="fas fa-check-circle"></i> 20% discount on renewal</li>
                                </ul>
                                <!-- <button>Contact Us</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php @include("./components/footer.php"); ?>

        