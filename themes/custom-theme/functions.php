<?php
    function enqueue_scripts() {
        // wp_enqueue_style('styles_1', get_stylesheet_uri());
        // wp_enqueue_style('styles_2', get_theme_file_uri("/css/style.css"));
        // wp_enqueue_style('styles_3', get_theme_file_uri("/lib/animate/animate.min.css"));
        // wp_enqueue_style('styles_4', get_theme_file_uri("/lib/owlcarousel/assets/owl.carousel.min.css"));
        // wp_enqueue_style('styles_5', get_theme_file_uri("/lib/owlcarousel/assets/owl.carousel.min.css"));
        // wp_enqueue_style('styles_6', get_theme_file_uri("/css/bootstrap.min.css"));
        
        // wp_enqueue_style('styles_2', get_template_directory_uri() . "/lib/animate/animate.min.css");
        // wp_enqueue_style('styles_3', get_template_directory_uri() . "/lib/owlcarousel/assets/owl.carousel.min.css");
        // wp_enqueue_style('styles_4', get_template_directory_uri() . "/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css");
        wp_enqueue_style('styles_5', get_template_directory_uri() . "/css/bootstrap.min.css");
        // wp_enqueue_style('styles_6', get_template_directory_uri() . "/css/style.css");
    }
    add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>