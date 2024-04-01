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
                    <h2 class="page-title">FAQ</h2>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="section section-padding">
            <div class="container">

                <div class="faq-wrapper">

                    <div class="section-title">
                        <h6 class="sub-title">Question And Answer</h6>
                        <h2 class="main-title">Get easily answer your question</h2>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="faq-accordion">

                                <div class="accordion" id="accordionFaq">
                                    <div class="accordion-item">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        Do you offer personalized nutrition and fitness plans?
                                        </button>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Absolutely! We understand that every individual has unique needs and goals. Our team of experts is here to create personalized nutrition and fitness plans tailored to your specific requirements, lifestyle, and preferences.</p>
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
                                </div>

                            </div>
                            
                            <div class="faq-btn">
                                <a href="#" class="btn btn-primary btn-hover-secondary">Other’s Question</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php @include("./components/footer.php"); ?>

        