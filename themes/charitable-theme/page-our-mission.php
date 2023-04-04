<?php get_header(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/mission-0.webp") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?php the_title(); ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <?php
                    global $wp_query;
                    $post = $wp_query->post;
                    $ancestors = get_post_ancestors($post);
                    if (count($ancestors) != 0) {
                        $ancestors = array_reverse($ancestors);
                        foreach ($ancestors as $value) {

                            ?>
                            <li class="breadcrumb-item"><a href="<?php echo get_the_permalink($value); ?>"><?php echo get_the_title($value); ?></a></li>

                            <?php
                        }
                    } ?>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        <?php the_title() ?>
                    </li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">Our Mission</h6>
                <h1 class="mb-4">Help support <span class="text-primary text-uppercase">Charitable</span></h1>
                <p class="mb-4">
                    CHARITABLE was launched in response to the devastating earthquake that struck the countries of
                    Turkey and Syria on February 6th, 2023.
                    <br /><br />
                    Over 50,000 people have tragically lost their lives. Over
                    100,000 people have been seriously injured and thousands of
                    families have been left homeless in the bitter cold.
                    <br /><br />
                    Our teams are working on the ground in Turkey and Syria
                    with local communities to provide: <br /><br />
                    <i class="fa fa-solid fa-arrow-right text-primary mb-2"></i>
                    Shelter, blankets and heating for people who have lost their
                    homes <br /><br />
                    <i class="fa fa-solid fa-arrow-right text-primary mb-2"></i>
                    Food and clean water to ensure families can survive the winter
                    <br /><br />
                    <i class="fa fa-solid fa-arrow-right text-primary mb-2"></i>
                    Healthcare and psychosocial support for communities affected
                </p>
                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-solid fa-skull-crossbones fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">+50K</h2>
                                <p class="mb-0">Killed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-solid fa-user-injured fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">+100K</h2>
                                <p class="mb-0">Injured</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-solid fa-exclamation fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">+23M</h2>
                                <p class="mb-0">Affected</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href=<?php echo site_url("/donate"); ?>>Donate Now</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src=<?php echo get_theme_file_uri("img/mission-1.webp") ?> style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src=<?php echo get_theme_file_uri("img/mission-2.webp") ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_theme_file_uri("img/mission-3.webp") ?>>
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src=<?php echo get_theme_file_uri("img/mission-4.webp") ?>>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="spacer"></div>

<!-- Recent Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">FEATURED</h6>
            <h1 class="mb-5"><span class="text-primary text-uppercase">Recent</span> Activity</h1>
        </div>
        <div class="cards row g-4">
            <?php
            $stories = new WP_Query(
                array(
                    'posts_per_page' => 6,
                    'post_type' => array(
                        'story',
                        'opportunities',
                        'news'
                    ),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'reading_time',
                            'compare' => '>=',
                            'value' => 3,
                        )
                    )
                )
            );
            while ($stories->have_posts()) {
                $stories->the_post(); ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href=<?php the_permalink(); ?>>
                        <div>
                            <div class="card-img-div">
                                <img class="card-img" src=<?php echo the_post_thumbnail_url('card') ?> alt="Image">
                            </div>
                        </div>
                        <p class="text-body card-date mb-0">
                            <?php echo the_time("M j, Y") . " | " . strtoupper(get_post_type()); ?>
                        </p>
                        <h5 class="mb-3" style="color:var(--primary);">
                            <?php echo trim(substr(get_the_title(), 0, 35)), (strlen(get_the_title()) > 35) ? " ..." : ""; ?>
                        </h5>
                        <p class="text-body mb-3">
                            <?php echo trim(substr(get_the_content(), 0, 60)), (strlen(get_the_content()) > 60) ? " ..." : ""; ?>
                        </p>
                    </a>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- Recent End -->

<?php get_footer(); ?>