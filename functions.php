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
add_filter('login_headerurl','ourHeaderUrl');
 function ourHeaderUrl(){
 return esc_url(site_url('/'));
 }

function custom_login() { ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet"> 
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(http://info3602-project.local/wp-content/themes/charitable-theme/img/site-logo.jpeg);
        -webkit-background-size:cover;
        background-size: contain;
        height:156px;
        width:156px;
        }
        body.login{
        background-image: url(http://info3602-project.local/wp-content/themes/charitable-theme/img/image.jpg);
        -webkit-background-size:cover;
        background-size: cover;
        font-family: "Montserrat" , Arial;
        }
        .login #login .message,
        .login #login #login_error,
        .login #login form {
            background-color: #fea1163d;
            color: white;
            border: 3px solid black;
            
        }
        .login #login form .input, .login #login form input[type=checkbox], .login #login input[type=text]{
            background-color: rgba(0,0,0,0);
            text-align:left;
        }
        .login label, a{
            color: white;
        }
        .login #login #nav a,
        .login #login #backtoblog a{
            text-decoration: none;
            color: white;
        }
        .login form p{
            text-align:left;
        }
        .login #login form .input, .login #login form input[type=checkbox], .login #login input[type=text]{
            color: white;
            text-align:left;
            border: 3px solid black;
            font-weight:300;
            letter-spacing: 7px;
        }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login' );

