<?php

    get_header();
    echo "test";
    while(have_posts()) {
        the_post();
        echo the_title();
    }

    get_footer();

?>