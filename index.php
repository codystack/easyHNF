<?php
@include("components/header.php");
?>

<div class="main-wrapper">

    <?php @include("./components/navbar.php"); ?>

    <div class="overlay"></div>


    <div class="slider-section slider-active section">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide animation-style-01 single-slider d-flex align-items-center" style="background-image: url(assets/images/slider/slider-1.jpg);">
                    <div class="container">

                        <div class="slider-content">
                            <h6 class="sub-title">Health, Nutrition & Fitness </h6>
                            <h1 class="main-title">Enjoy food on your fitness and health journey.</h1>
                            <p>We’ve helped about 1,000 people achieve their fitness goals and manage their health conditions.</p>
                            <a href="#" class="btn btn-primary btn-hover-secondary">Start Here</a>
                        </div>
                    </div>

                    <div class="slider-social">
                        <div class="container">
                            <div class="social-wrapper">
                                <p>Connect with us:</p>
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Features Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="features-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Feature Start -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <span><i class="flaticon-lunges"></i></span>
                            </div>
                            <div class="feature-content">
                                <div class="content-wrapper">
                                    <h4 class="title"><a href="#">Customized plan</a></h4>
                                    <p>Schedule an appointment with our dietitian to design a meal plan specific to your goal and health need.</p>
                                </div>
                                <a href="#" class="arrow"><i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Single Feature End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Feature Start -->
                        <div class="single-feature active">
                            <div class="feature-icon">
                                <span><i class="flaticon-lotus"></i></span>
                            </div>
                            <div class="feature-content">
                                <div class="content-wrapper">
                                    <h4 class="title"><a href="#">Basic Plan</a></h4>
                                    <p>Explore options of our redesigned meal plans for weight loss or weight gain and health management .</p>
                                </div>
                                <a href="#" class="arrow"><i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Single Feature End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Feature Start -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <span><i class="flaticon-computer"></i></span>
                            </div>
                            <div class="feature-content">
                                <div class="content-wrapper">
                                    <h4 class="title"><a href="#">Nutrition coaching</a></h4>
                                    <p>In addition to consultation sessions and designing you a tailor-made meal plan, we will coach you 1-on-1 on nutrition and meal prep.</p>
                                </div>
                                <a href="#" class="arrow"><i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Single Feature End -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-padding bg-grey overflow-hidden">
        <div class="container">

            <div class="about-wrapper">
                <div class="row align-items-center gx-xxl-5">
                    <div class="col-lg-5">
                        <div class="about-images">
                            <img src="assets/images/get-shape2.png" alt="shape" class="shape">
                            <div class="images">
                                <img src="assets/images/coach.jpeg" alt="About">
                            </div>
                            <div class="about-btn">
                                <a href="#" class="btn btn-primary btn-hover-secondary">Meet Instructor</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content bg-white">
                            <img class="shape" src="assets/images/shape/shape-1.png" alt="shape">
                            <div class="content-wrapper">
                                <!-- <h6 class="sub-title">Make us your health and fitness partner</h6> -->
                                <h2 class="main-title">Our expert dieticians are here to assist you every step of the way. </h2>
                                <p>We provide you with 1-on-1 consultation, regular follow-ups, and nutrition & meal prep trainings</p>
                                <span class="count">100+ Meals</span>
                                <p>Explore our meal options designed specifically to help you achieve your body and health goal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="section section-padding">
        <div class="container">

            <div class="section-title">
                <!-- <h6 class="sub-title">100+ courses available</h6> -->
                <h2 class="main-title">We cater to different nutrition goals</h2>
            </div>

            <div class="courses-wrapper">
                <div class="row gx-xxl-5">
                    <div class="col-lg-4 col-sm-6">

                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="assets/images/courses/high-protein.jpg" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <h4 style="align-items: center;" class="title"><a href="courses-details-left-sidebar.html">High Protein</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="assets/images/courses/blood-sugar.jpg" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <h4 style="align-items: center;" class="title"><a href="courses-details-left-sidebar.html">Blood sugar friendly</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="assets/images/courses/hypertension.jpg" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <h4 style="align-items: center;" class="title"><a href="courses-details-left-sidebar.html"> DASH (Dietary Approaches to Stop Hypertension) diet</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="assets/images/courses/weight-loss.jpg" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <h4 style="align-items: center;" class="title"><a href="courses-details-left-sidebar.html">Weight loss</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="assets/images/courses/weight-gain.jpg" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <h4 style="align-items: center;" class="title"><a href="courses-details-left-sidebar.html">Weight gain</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="assets/images/courses/cholesterol-friendly.jpg" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <h4 style="align-items: center;" class="title"><a href="courses-details-left-sidebar.html">Cholesterol friendly </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php @include("components/testimonial.php"); ?>


    <div class="section section-padding-02">
        <div class="container">

            <div class="section-title">
                <h6 class="sub-title">Our Blog Post</h6>
                <h2 class="main-title">Latest Article of Nutrition</h2>
            </div>

            <div class="blog-wrapper">
                <div class="row gx-xxl-5">
                    <div class="col-lg-4">

                        <div class="single-blog">
                            <div class="blog">
                                <div class="blog-date-meta">
                                    <div class="meta">
                                        <p class="author">By: <a href="https://www.thisdaylive.com/index.php/2021/08/08/a-beginners-guide-to-intermittent-fasting ">Arinola Odunuga <p>ThisDayLive</p></a></p>
                                    </div>
                                </div>

                                <h4 class="title"><a href="blog-details-left-sidebar.html">A Beginner’s Guide to Intermittent Fasting</a></h4>
                                <p>Intermittent fasting is not a diet, it is a meal timing plan.

                                    What you’re doing is focusing on a specific period of time in which you’re abstaining from food and a set time when you consume all your calories</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="single-blog">
                            <div class="blog">
                                <div class="blog-date-meta">

                                    <div class="meta">
                                        <p class="author">By: <a href="https://www.arise.tv/losing-weight-reaching-fitness-goals-easier-than-you-think/ ">Arinola Odunuga <p>Arise News</p> <br></a></p>
                                    </div>
                                </div>

                                <h4 class="title"><a href="blog-details-left-sidebar.html">Losing Weight, Reaching Fitness Goals Easier Than You Think</a></h4>
                                <p>Setting goals that you can visualize yourself achieving will make you more committed but that doesn’t mean your goals shouldn’t challenge you.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="single-blog">
                            <div class="blog">
                                <div class="blog-date-meta">

                                    <div class="meta">
                                        <p class="author">By: <a href="#">Arinola Odunuga <p>ThisDayLive</p> <br></a></p>
                                    </div>
                                </div>

                                <h4 class="title"><a href="blog-details-left-sidebar.html">How Crash Dieting Messes up Your Metabolism</a></h4>
                                <p>Lorem sum same dummy text theme industry psum have been them industry the leaf into type setting.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>



    <?php @include("./components/footer.php"); ?>