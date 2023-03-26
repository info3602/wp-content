<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              <?php
                  echo the_title(); 
                ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo site_url("/news");?>">News</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><?php echo get_the_date();?></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><?php the_field("source");?></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><?php echo "Reading Time: ",get_field("reading_time"), " min(s)";?></li>
                    
                </ol>
            </nav>
        </div>
    </div>
</div>
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">News</h6>
                <h1 class="text-white mb-4"><?php echo the_title()?></h1>
                <p class="text-white mb-4"><?php echo the_content();?></p>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center" style="background-image: url(<?php echo get_field("video_image"); ?>)">
        </div>
        <div class="row g-0">
            <div class="col-md-12 bg-dark d-flex align-items-center">
                <div class="p-5">
                <p class="text-white mb-4"><?php echo get_field('article_1');?></p>
            </div>
        </div>
        
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" >
                <div class="modal-content rounded-0" >
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="<?php echo the_field("video")?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<!-- Video Start -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
    

<div class="col-md-12">
        <div class="video" style="background-image: url('<?php echo get_field("video_image")?>');">
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="" data-bs-target="#videoModal">
                    <span> </span>
            </button>
        </div>
    </div>

</div>



<div class="container-xxl py-5">
    <div class="container">
        
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Related <span class="text-primary text-uppercase">Volunteer Opportunities</span></h1>
        </div>

        <div class="row g-4">
            <?php
                $relatedOpportunities = get_field("related_opportunity");
                foreach($relatedOpportunities as $opportunity){
                    the_post(); 
                
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                
                    <a class="service-item rounded" href=<?php the_permalink($opportunity); ?>>
                        <h5 class="mb-3">
                        <?php echo strtoupper(get_post_type($opportunity)); ?>
                        </h5>
                    <div>
                    <div>
                        <img class="w-75" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
                    </div>
                    </div>
                    <p class="text-body mb-0">
                    <?php echo get_the_date(); ?>
                    </p>
                    <h5 class="mb-3">
                    <?php echo wp_trim_words(get_the_title($opportunity), 6); ?>
                    </h5>
                    <p class="text-body mb-0">
                    <?php echo wp_trim_words(get_the_content($opportunity), 10); ?>
                    </p>


                </a>
                </div>
                <?php
                }
            
            ?>
        </div>
    </div>
</div>   <!-- More News End -->


<?php get_footer() ?>