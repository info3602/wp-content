<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" 
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Impact Stories
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

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        
        
        <p class="mb-4">
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
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-12 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-3.jpg" ?>>
          </div>
          <br></br>
          <br></br>
        </div> 
      </div>
      

  
      <div class="wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-start text-primary text-uppercase">
            </h6>
            <h1 class="mb-5">Related Stories</h1>
        </div>
        <div class="row g-4">
      <?php
      $news = new WP_Query(
        array(
          'posts_per_page' =>
          -1,
          'post_type' => 'story'
        )
      );
      while ($news->have_posts()) {
        $news->the_post(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <a class="service-item rounded" href=<?php the_permalink(); ?>>
            <div>
              <div>
                <img class="w-75" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
              </div>
            </div>
            <h5 class="mb-3">
              <?php echo wp_trim_words(get_the_title(), 6); ?>
            </h5>
            <p class="text-body mb-0">
              <?php echo wp_trim_words(get_the_content(), 10); ?>
            </p>
          </a>
        </div>
        <?php
      }
      ?>
    </div>            
    </div>
  </div>
</div>
<!-- About End -->


<?php get_footer() ?>