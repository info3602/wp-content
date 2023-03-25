<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" 
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-4.jpg") ?>);">
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
            </div>
        </div>
        </div>
        <!-- Steps End -->

        <div class="container">
          <img src=<?php echo get_theme_file_uri("img/testimonial-1.jpg") ?> alt="Avatar" style="width:90px">
          <p>
            <span>Jane Doe</span><br></br> CEO at Mighty Schools.
          </p>
          <p>It is very rewarding to be apart of this charity.</p>
        </div>

        <div class="container">
          <img src=<?php echo get_theme_file_uri("img/testimonial-2.jpg") ?> alt="Avatar" style="width:90px">
          <p>
            <span>Chris Fox.</span><br></br> 
          </p>
          <p>It's amazing to see the impact we have on people's lives</p>
        </div>



        
       

<?php get_footer() ?>