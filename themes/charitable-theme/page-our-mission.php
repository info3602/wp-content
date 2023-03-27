<?php get_header(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
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
                        foreach($ancestors as $value){
                           
                        ?>  
                            <li class="breadcrumb-item"><a href="<?php echo get_the_permalink($value);?>"><?php echo get_the_title($value);?></a></li>

                    <?php
                        }?>
                            <li class="breadcrumb-item text-white active" aria-current="page"><?php the_title()?></li>
                
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
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src=<?php echo get_theme_file_uri("img/carousel-3.jpg") ?> style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src=<?php echo get_theme_file_uri("img/carousel-4.jpg") ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_theme_file_uri("img/carousel-5.jpg") ?>>
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src=<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<?php get_footer(); ?>