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
                </div>
            </div>
        </div>
        
        <div class="section section-padding">
            <div class="container">

                <div class="faq-wrapper">

                    <!-- <div class="section-title">
                        <h6 class="sub-title">Question And Answer</h6>
                        <h2 class="main-title">Get easily answer your question</h2>
                    </div> -->

                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="faq-accordion">

                                <div class="accordion" id="accordionFaq">
                                    <div class="accordion-item">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        Do you offer personalised nutrition and fitness plans?
                                        </button>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>We only offer nutrition plans for now. The basic plans are set plans but you get personalised plans if you opt for the nutrition coaching or custom plan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Can my subscription be ended at anytime?
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Yes, you can cancel your subscription at a anytime.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        How much weight can I expect to lose on your plans?
                                        </button>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>We can’t give figures for this because how much you lose will depend on a couple of factors like your starting weight and activity level.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        Can I consult with a dietician on your platform?
                                        </button>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Yes, you’re entitled to consultations if you’re on our custom plan or  nutrition coaching plan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        Do you have plans for weight gain?
                                        </button>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>We only have weight gain plans available for custom and nutrition coaching plans.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                        Can I purchase more than one plan?
                                        </button>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p>Yes, you can.</p>
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

<?php @include("./components/footer.php"); ?>

        