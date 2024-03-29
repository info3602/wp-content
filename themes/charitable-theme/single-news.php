<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/blog-2.webp") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?php the_title(); ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href=<?php echo site_url() ?>>Home</a></li>
                    <li class="breadcrumb-item"><a href=<?php echo site_url("/news") ?>>News</a></li>
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
                <i class="fa fas fa-globe fa-2x"> </i>
                <h6 class="section-title text-start text-primary text-uppercase">
                    <a href=<?php echo get_post_type_archive_link(get_post_type()); ?>><?php echo get_post_type() ?></a>
                </h6>
                <h6 class="">
                    <?php echo the_time('M j, Y') . "  " ?> &bull;
                    <?php echo "  " . get_field('reading_time') . " min read" ?>
                </h6>
                <h6 class="mb-4">
                    <?php echo get_field('source') ?>
                </h6>
                <div class="spacer-10"></div>
                <p class="mb-4">
                    <?php echo the_content(); ?>
                </p>
            </div>
            <div class="post-article col-lg-12">
                <iframe class="post-img" height="315" src=<?php echo "https://www.youtube.com/embed/" . get_field('video') ?> title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="post-article col-lg-12">
                <p class="mb-4">
                    <?php echo get_field('extra'); ?>
                </p>
            </div>
            <div class="post-article col-lg-12">
                <p class="mb-4">
                    <?php
                    comments_template();
                    ?>
                </p>
            </div>
        </div>
    </div>

    <?php
    $related = get_field('related_stories');
    if ($related) {
        ?>
        <div class="spacer"></div>
        <div class="post-article col-lg-12">
            <h6 class="section-title text-start text-primary text-uppercase">
                Related
            </h6>
            <h4 class="text-start text-uppercase">
                Impact Stories
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
<!-- Article End -->

<script type="text/javascript">
    let submit = document.querySelector("#submit");
    submit.classList.add("btn");
    submit.classList.add("btn-primary");
    submit.classList.add("py-md-3");
    submit.classList.add("px-md-5");
    submit.classList.add("me-3");
</script>

<?php get_footer() ?>