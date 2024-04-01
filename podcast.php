<?php
@include("components/header.php");
?>

<div class="main-wrapper">

    <?php @include("./components/navbar.php"); ?>

    <div class="overlay"></div>

    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="page-title">About</h2>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="section section-padding">
        <div class="container">
            <div class="error-wrapper">
                <div class="error-images">
                    <img src="./assets/images/coming-soon.jpg">
                </div>
            </div>
        </div>
    </div>


</div>
        
<?php @include("./components/footer.php"); ?>