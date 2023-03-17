<?php
    get_header();
    while(have_posts()) {
        the_post();
        echo the_title() . "<br>";
    }
    echo "hr";
    get_footer();
?>