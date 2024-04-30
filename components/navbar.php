    <div class="header section">

        <div class="header-main">
            <div class="container">

                <div class="header-wrapper">

                    <div class="header-logo">
                        <a href="./"><img src="assets/images/easyhnf-logo-dark.png" width="200" alt="Logo"></a>
                    </div>

                    <div class="header-menu d-none d-lg-flex">

                        <ul class="nav-menu">
                            <li><a class="" href="about">About</a></li>
                            <li><a class="" href="plan">Plans</a></li>
                            <!-- <li><a class="" href="blog.php">Blog</a></li> -->
                            <li><a class="" href="faq">Faq</a></li>
                            <li><a class="" href="podcast">Podcast</a></li>

                        </ul>

                        <!-- <ul class="social" style="margin-left: 30px;">
                            <li><a href="https://www.instagram.com/easyhnf?igsh=MzRlODBiNWFlZA==" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul> -->

                        <div class="header-btn">
                            <a class="btn btn-hover-primary" href="login">Log In</a>
                            <a class="btn btn-secondary btn-hover-primary" href="sign-up">Sign Up</a>
                        </div>

                    </div>

                    <div class="header-toggle d-lg-none">

                        <!-- <a class="btn btn-secondary btn-hover-primary" href="login">Log In</a> -->

                        <a href="#" class="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <div class="mobile-menu">

        <a class="menu-close" href="javascript:void(0)">
            <i class="icofont-close-line"></i>
        </a>

        <div class="mobile-menu-items">
            <ul class="nav-menu">
                <li><a class="<?php if ($page == 'Plans') {
                                    echo 'active';
                                } ?>" href="plan">Plans</a></li>
                <li><a class="<?php if ($page == 'Podcast') {
                                    echo 'active';
                                } ?>" href="podcast">Podcast</a></li>
                <li><a class="<?php if ($page == 'Blog') {
                                    echo 'active';
                                } ?>" href="blog">Blog</a></li>
                <li><a class="<?php if ($page == 'About') {
                                    echo 'active';
                                } ?>" href="about">About</a></li>
                <li><a class="<?php if ($page == 'Faq') {
                                    echo 'active';
                                } ?>" href="faq">Faq</a></li>
            </ul>
        </div>

    </div>