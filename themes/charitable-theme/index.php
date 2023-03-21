<?php
get_header();
while (have_posts()) {
    the_post();
    echo the_title() . "<br><br>";
    echo the_content() . "<br>";
}
get_footer();
?>