<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" 
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">News
                    </h1>
              
                </div>
            </div>
        </div>
        <!-- Page Header End -->


    <!-- About Start -->
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5"><span class="text-primary text-uppercase"><?php the_title(); ?></span></h1>
            <h8 class="display-12 text-black mb-3 animated slideInDown">
               Link: <?php the_permalink(); ?><br></br>
              Author: <?php the_author(); ?><br></br>
              Date:<?php echo get_the_date( 'l, F d, Y' ); ?><br></br>
              Read Duration:
              </h8>
              <br></br>
              <h6 class="section-title text-center text-primary text-uppercase"></h6>
        </div>

  <div class="container text-center py-5">
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
      <div class="col-lg-12">   
      <div class="row g-5 align-items-center">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?>>
          </div>
          <br></br>
          <br></br>
          <!-- Video Start -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/EXJKaQF0Rzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>     
          <!-- Video Start -->  
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<?php get_footer() ?>