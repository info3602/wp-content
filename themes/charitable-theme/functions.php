<?php
    function enqueue_scripts() {
        wp_enqueue_style('styles_1', get_stylesheet_uri());
        wp_enqueue_style('styles_2', get_template_directory_uri() . "/lib/animate/animate.min.css");
        wp_enqueue_style('styles_3', get_template_directory_uri() . "/lib/owlcarousel/assets/owl.carousel.min.css");
        wp_enqueue_style('styles_4', get_template_directory_uri() . "/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css");
        wp_enqueue_style('styles_5', get_template_directory_uri() . "/css/bootstrap.min.css");
        wp_enqueue_style('styles_6', get_template_directory_uri() . "/css/style.css");

        wp_enqueue_style('functions_1', get_template_directory_uri() . "/lib/wow/wow.min.js");
        wp_enqueue_style('functions_2', get_template_directory_uri() . "/lib/easing/easing.min.js");
        wp_enqueue_style('functions_3', get_template_directory_uri() . "/lib/waypoints/waypoints.min.js");
        wp_enqueue_style('functions_4', get_template_directory_uri() . "/lib/counterup/counterup.min.js");
        wp_enqueue_style('functions_5', get_template_directory_uri() . "/lib/owlcarousel/owl.carousel.min.js");
        wp_enqueue_style('functions_6', get_template_directory_uri() . "/lib/tempusdominus/js/moment.min.js");
        wp_enqueue_style('functions_7', get_template_directory_uri() . "/lib/tempusdominus/js/moment-timezone.min.js");
        wp_enqueue_style('functions_8', get_template_directory_uri() . "/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js");
        wp_enqueue_style('functions_1', get_template_directory_uri() . "/js/main.js");
    }
    add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>