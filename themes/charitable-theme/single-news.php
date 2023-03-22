<?php get_header() ?>

<!-- News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">News</h6>
            <h1 class="mb-5"> What's happening <span class="text-primary text-uppercase">Today</span></h1>
        </div>
        <?php
            $news = new WP_Query(
            array(
                    'posts_per_page' =>
                    -1,
                    'post_type' => 'news'
                    )
                );
                while ($news->have_posts()) {
                    $news->the_post(); ?>
                    <h2> <?php the_title(); ?> </h2>
                    <?php the_content(); ?>
                    
                    <?php
                    }
        ?>

    </div>
</div>        

<?php get_footer() ?>