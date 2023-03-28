<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charitable</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href=<?php echo site_url(); ?>
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Charitable</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@charitable.accesstt.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+1-868-123-4567</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href=<?php echo site_url(); ?> class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Charitable</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <?php
                                // wp_nav_menu(
                                //     array(
                                //         'theme_location' => 'header',
                                //         'menu_class' => "navbar-nav mr-auto py-0",
                                //     )
                                // );
                                ?>
                                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <a href=<?php echo site_url(); ?>
                                    class="nav-item nav-link <?php echo (is_front_page()) ? "active" : "" ?>">Home
                                </a>
                                <a href=<?php echo site_url("/donate"); ?>
                                    class="nav-item nav-link <?php echo (is_page("donate")) ? "active" : "" ?>">Donate</a>
                                <a href=<?php echo site_url("/blog"); ?>
                                    class="nav-item nav-link <?php echo (is_home() || is_archive() || is_single()) ? "active" : "" ?>">Blog</a>
                                <div class="nav-item dropdown">
                                    <a href=""
                                        class="nav-link dropdown-toggle <?php echo (is_page("our-team") || is_page("our-values") || is_page("our-mission")) ? "active" : "" ?>"
                                        data-bs-toggle="dropdown">About Us</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href=<?php echo site_url("/our-mission"); ?>
                                            class="dropdown-item <?php echo (is_page("our-mission")) ? "active" : "" ?>">Our
                                            Mission</a>
                                        <a href=<?php echo site_url("/our-team"); ?>
                                            class="dropdown-item <?php echo (is_page("our-team")) ? "active" : "" ?>">Our
                                            Team</a>
                                        <a href=<?php echo site_url("/our-values"); ?>
                                            class="dropdown-item <?php echo (is_page("our-values")) ? "active" : "" ?>">Our
                                            Values</a>
                                    </div>
                                </div>
                                
                                <?php
                                if (is_user_logged_in()) { ?>
                                    <a href=<?php echo wp_logout_url(); ?> class="nav-item nav-link">Logout</a>
                                <?php } else { ?>
                                    <a href=<?php echo wp_login_url(); ?> class="nav-item nav-link">Login</a>
                                    <a href=<?php echo site_url("/wp-signup.php"); ?> class="nav-item nav-link">Signup</a>
                                <?php } ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->