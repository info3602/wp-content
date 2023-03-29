<!-- Footer Start -->
<div class= "search-overlay">
    <div class="search-overlay__top">
        <div class="container">
            <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
            <input type="text" class="search-term" placeholder="Search" id="search-term"/>
            <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
        </div>
    </div>
    <div class="container">
                <div class="search-overlay__results" id ="search-overlay__results"></div>
    </div>

</div>
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <div class="bg-primary rounded p-4">
                    <a href="index.html">
                        <h1 class="text-white text-uppercase mb-3">Charitable</h1>
                    </a>
                    <p class="text-white mb-0">
                        Making a difference, <span class="tagline-phrase">one life at a time.</span>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Port-of-Spain, Trinidad</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1-868-123-4567</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@charitable.accesstt.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="row gy-5 g-4">
                    <div class="col-md-12">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Quick Links</h6>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_class' => "navbar-nav mr-auto py-0",
                                'before' => '<i class="fas fa-caret-right"></i> ',
                            )
                        );
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Charitable</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>