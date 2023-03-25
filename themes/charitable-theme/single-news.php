<?php get_header() ?>

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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Donate</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
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

    <div class="col-lg-12">
        <p class="mb-10">
        <?php
            while(have_posts()){ 
                the_post(); 
                ?>
                <?php the_content(); ?>
                
                <?php
                }
                ?>
        </p>

      </div>
      
      <div class="col-lg-4">
        <div class="row g-5">
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?>>
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-5.jpg" ?>>
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-3.jpg" ?>>
          </div><div class="col-6 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?>>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Video Start -->
<iframe width="560" height="315" src="https://www.youtube.com/embed/EXJKaQF0Rzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>     
        <!-- Video Start -->

        

<?php get_footer() ?>