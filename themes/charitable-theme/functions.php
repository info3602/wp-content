<?php

register_nav_menu('header', 'Header');

add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts()
{
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

    wp_enqueue_script('jquery');
}

//Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');
function redirectSubsToFrontend()
{
    $ourCurrentUser = wp_get_current_user();
    $userNumRoles = count($ourCurrentUser->roles);
    $userRole = $ourCurrentUser->roles[0];
    if ($userNumRoles == 1 and $userRole == 'subscriber') {
        wp_redirect(site_url('/'));
        exit; //tell PHP to stop once someone is redirected
    }
}

add_action('wp_loaded', 'noSubsAdminBar');
function noSubsAdminBar()
{
    $ourCurrentUser = wp_get_current_user();
    // var_dump($ourCurrentUser);
    if ($ourCurrentUser->roles) {
        $userNumRoles = count($ourCurrentUser->roles);
        $userRole = $ourCurrentUser->roles[0];
        if ($userNumRoles == 1 and $userRole == 'subscriber') {
            show_admin_bar(false);
        }
    }
}

add_action('wp_ajax_nopriv_create_donation', 'create_donation');
add_action('wp_ajax_create_donation', 'create_donation');
function create_donation()
{
    $donation = [
        'post_status' => "publish",
        'post_type' => "donations",
        'post_title' => $_POST['first_name'] . " " . $_POST['last_name'] . " - $" . $_POST['donation_amount'],
        'meta_input' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'contact' => $_POST['contact'],
            'donation_amount' => $_POST['donation_amount'],
            'target_area' => $_POST['target_area'],
            'source' => $_POST['source'],
        ]
    ];
    wp_insert_post($donation);
    wp_send_json_success("success");
    wp_die();
}


add_action('wp_ajax_nopriv_create_message', 'create_message');
add_action('wp_ajax_create_message', 'create_message');
function create_message()
{
    $message = [
        'post_status' => "publish",
        'post_type' => "messages",
        'post_title' => $_POST['name'],
        'meta_input' => [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'subject' => $_POST['subject'],
            'message' => $_POST['message'],
        ]
    ];
    wp_insert_post($message);
    wp_send_json_success("success");
    wp_die();
}

?>