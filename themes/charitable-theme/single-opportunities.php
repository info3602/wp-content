<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/blog-3.webp") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?php the_title(); ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href=<?php echo site_url() ?>>Home</a></li>
                    <li class="breadcrumb-item"><a href=<?php echo site_url("/opportunities") ?>>Opportunities</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Article</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Article Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="post-article-div row g-5 align-items-center">
            <div class="post-article col-lg-12">
                <i class="fa fas fa-search fa-2x"> </i>
                <h6 class="section-title text-start text-primary text-uppercase">
                    <a href=<?php echo get_post_type_archive_link(get_post_type()); ?>><?php echo get_post_type() ?></a>
                </h6>
                <h6 class="">
                    <?php echo the_time('M j, Y') . "  " ?> &bull;
                    <?php echo "  " . get_field('reading_time') . " min read" ?>
                </h6>
                <h6 class="">
                    <?php echo "Location: " . get_field('location') ?>
                </h6>
                <div class="spacer-10"></div>
                <p class="mb-4">
                    <?php echo the_content(); ?>
                </p>
            </div>

            <div class="post-article col-lg-12">
                <p class="mb-4">
                    <?php
                    comments_template();
                    ?>
                </p>
            </div>

            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">GET INVOLVED</h6>
                        <h1 class="mb-5">How You Can <span class="text-primary text-uppercase">Help</span></h1>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="step service-item rounded" href="">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-solid fa-1 fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Get in Touch</h5>
                                <p class="text-body mb-0">Send an email to info@charitable.accesstt.com with ‘Volunteer’
                                    in the subject
                                    line with your name and contact details.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="step service-item rounded" href="">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-2 fa-2x text-primary"></i>

                                    </div>
                                </div>
                                <h5 class="mb-3">Find an Opportunity</h5>
                                <p class="text-body mb-0">The Charitable team will get in touch and discuss any
                                    volunteer opportunities currently available and how we can best put your great
                                    skills to use.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="step service-item rounded" href="">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-3 fa-2x text-primary"></i>

                                    </div>
                                </div>
                                <h5 class="mb-3">Get Volunteering!</h5>
                                <p class="text-body mb-0">It could be a technology project, working with our
                                    Communications team or helping out on a fundraising event.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $related = get_field('related_news');
        if ($related) {
            ?>
            <div class="spacer"></div>
            <div class="post-article col-lg-12">
                <h6 class="section-title text-start text-primary text-uppercase">
                    Related
                </h6>
                <h4 class="text-start text-uppercase">
                    News
                </h4>
                <div class="spacer-50"></div>
                <div class="row g-4">
                    <?php
                    foreach ($related as $item) {
                        ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="service-item rounded" href=<?php the_permalink($item); ?>>
                                <div>
                                    <div class="card-img-div">
                                        <img class="card-img" src=<?php echo get_the_post_thumbnail_url($item, 'card') ?>
                                            alt="Image">
                                    </div>
                                </div>
                                <p class="text-body card-date mb-0">
                                    <?php echo the_time("M j, Y") . " | " . strtoupper(get_post_type($item)); ?>
                                </p>
                                <h5 class="mb-3" style="color:var(--primary);">
                                    <?php echo trim(substr(get_the_title($item), 0, 35)), (strlen(get_the_title($item)) > 35) ? " ..." : ""; ?>
                                </h5>
                                <p class="text-body mb-0">
                                    <?php echo trim(substr(get_the_content(null, false, $item), 0, 60)), (strlen(get_the_content(null, false, $item)) > 35) ? " ..." : ""; ?>
                                </p>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<!-- Article End -->

<script type="text/javascript">
    let submit = document.querySelector("#submit");
    submit.classList.add("btn");
    submit.classList.add("btn-primary");
    submit.classList.add("py-md-3");
    submit.classList.add("px-md-5");
    submit.classList.add("me-3");
</script>

<?php
get_footer()
    ?>