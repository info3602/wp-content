<?php get_header() ?>


<div class="container-fluid page-header mb-5 p-0" 
    style="background-image: url(<?php echo get_theme_file_uri("img/volunteer-1.jpg") ?>);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Volunteer Opportunities
                    </h1>
              
                </div>
            </div>
        </div>
        <!-- Page Header End -->


    <!-- About Start -->
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5"><span class="text-primary text-uppercase"><?php the_title(); ?></span></h1>
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
              <br></br>
              <h6 class="section-title text-center text-primary text-uppercase"></h6>
        </div>

        <!-- Steps Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                
                <h1 class="mb-4">
                How you can help 
                <span class="text-primary text-uppercase">Save Lives</span>
                </h1>
                <p class="mb-4">
                Here are some easy steps to
                    <span class="text-primary text-uppercase">Volunteer</span>
                    <br />
                    
                    <h5>Step 1</h5><br />
                    Go to our site and select the Volunteer Opportunities option.
                    <br /><br />
                    
                    <h5>Step 2</h5><br />
                    Fill out information required on form and click submit once completed.
                    <br /><br />
                    
                    <h5> Step 3</h5><br />
                    Look our for confirmation email and further instructions.
                    <br /><br />
                </p>
            </div>
                <div class="col-lg-6">
                  <div class="row g-3">
                    <div class="col-6 text-end">
                      <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/volunteer-1.jpg" ?>>
                    </div>
                    <div class="col-6 text-start">
                      <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/volunteer-2.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                      <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/volunteer-3.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                      <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/volunteer-4.jpg" ?>>
                    </div>
                  </div>
                </div>
                <h1 class="mb-4">
                <span class="text-primary text-uppercase">Volunteer Testimonials</span>
                </h1>
                  <div class="col-lg-6">
                    <img src=<?php echo get_theme_file_uri("img/testimonial-1.jpg") ?> alt="Avatar" style="width:90px">
                    <p>
                      <span>Jane Doe</span><br></br>
                    </p>
                    <p>It is very rewarding to be apart of this charity.</p>
                  </div>
                  <div class="col-lg-6">
                    <img src=<?php echo get_theme_file_uri("img/testimonial-2.jpg") ?> alt="Avatar" style="width:90px">
                    <p>
                      <span>Chris Fox.</span><br></br> 
                    </p>
                    <p>It's amazing to see the impact we have on people's lives</p>
                  </div>
                  <div class="col-lg-6">
                    <img src=<?php echo get_theme_file_uri("img/testimonial-3.jpg") ?> alt="Avatar" style="width:90px">
                    <p>
                      <span>Tom Chin.</span><br></br> 
                    </p>
                    <p>It makes me so happy so help people who had to flee their countries</p>
                  </div>
                  <div class="col-lg-6">
                    <img src=<?php echo get_theme_file_uri("img/testimonial-4.jpg") ?> alt="Avatar" style="width:90px">
                    <p>
                      <span>Jamie Thomas</span><br></br> 
                    </p>
                    <p>It broke my heart when I saw the devastation. I had to help in any way and this charity helped me do that</p>
                  </div>

          </div>
      </div>
    </div>
        <!-- Steps End -->  

<?php get_footer() ?>