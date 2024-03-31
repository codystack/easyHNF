<?php
@include("components/header.php");
?>

<body>

    <div class="main-wrapper">

        <?php @include("./components/navbar.php"); ?>


        <div class="overlay"></div>



        <!-- Page banner Section Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">

                <!-- Page banner Section Start -->
                <div class="page-banner-content">
                    <h2 class="page-title">FAQ</h2>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ul>
                </div>
                <!-- Page banner Section End -->

            </div>
        </div>
        <!-- Page banner Section End -->

        <!-- FAQ Section Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h6 class="sub-title">Question And Answer</h6>
                        <h2 class="main-title">Get easily answer your question</h2>
                    </div>
                    <!-- Section Title End -->

                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion">

                                <div class="accordion" id="accordionFaq">
                                    <div class="accordion-item">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        Do you offer personalized nutrition and fitness plans?
                                        </button>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Absolutely! We understand that every individual has unique needs and goals. Our team of experts is here to create personalized nutrition and fitness plans tailored to your specific requirements, lifestyle, and preferences.</p>

                                                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type scrambled it to make a type specimen book.</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        How can your products/services benefit my health and fitness journey?
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Our products and services are carefully curated to support your health and fitness goals. From nutritious supplements to personalized workout plans and dietary advice, we provide comprehensive solutions to enhance your overall well-being and optimize performance.</p>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Can I consult with a nutritionist or fitness expert through your platform?
                                        </button>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Yes, we offer virtual consultations with experienced nutritionists and fitness experts to address your concerns, provide personalized recommendations, and guide you on your health and fitness journey. Schedule a consultation today to get started!</p>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        How can your products/services benefit my health and fitness journey?
                                        </button>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Our products and services are carefully curated to support your health and fitness goals. From nutritious supplements to personalized workout plans and dietary advice, we provide comprehensive solutions to enhance your overall well-being and optimize performance.</p>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                            Are collards a good source of phytochemicals?
                                        </button>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type scrambled it to make a type specimen book.</p>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                            <!-- FAQ Accordion End -->

                            <!-- FAQ Button Start -->
                            <div class="faq-btn">
                                <a href="#" class="btn btn-primary btn-hover-secondary">Other’s Question</a>
                            </div>
                            <!-- FAQ Button End -->
                        </div>
                    </div>

                </div>
                <!-- FAQ Wrapper End -->

            </div>
        </div>
        <!-- FAQ Section End -->

        <!-- Download App Start -->
        <div class="section section-padding download-section">

            <img class="shape-01" src="assets/images/shape/shape-7.png" alt="Shape">
            <img class="shape-02" src="assets/images/shape/shape-8.png" alt="Shape">

            <div class="container">

                <!-- Download App Wrapper Start -->
                <div class="download-app-wrapper">

                    <!-- Section Title Start -->
                    <div class="section-title shape-none">
                        <h6 class="sub-title">Our mobile is in the works</h6>
                        <h2 class="main-title">Stay tuned for updates and be the first to experience the convenience and power of our app.</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Download App Button End -->
                    <!-- <div class="download-app-btn">
                        <ul class="app-btn">
                            <li><a href="#"><img src="assets/images/play-store.jpg" alt="Play Store"></a></li>
                            <li><a href="#"><img src="assets/images/app-store.jpg" alt="App Store"></a></li>
                        </ul>
                    </div> -->
                    <!-- Download App Button End -->

                </div>
                <!-- Download App Wrapper End -->

            </div>
        </div>
        <!-- Download App End -->

        <?php @include("./components/footer.php"); ?>

        