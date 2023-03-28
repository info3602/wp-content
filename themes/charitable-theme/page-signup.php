<?php get_header() ?>

<!-- Sign Up Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Sign up with<span class="text-primary text-uppercase">Charitable</span></h1>
            <h6 class="section-title text-center text-primary text-uppercase">SIGN UP </h6>
        </div>
        <br></br>
        <br></br>
        <div class="container-xxl py5">
          <div class="container">
            <div class="md-4">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form type="submit" method="POST" action="" id="signup-form">
                        
                            <div class="col-12">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="first-name" name="first_name"
                                        placeholder="First Name">
                                    <label for="first-name">New Username</label>
                                </div>
                            </div>
                            <br></br>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="last-name" name="last_name"
                                        placeholder="Last Name">
                                    <label for="last-name">New Password</label>
                                </div>
                            </div>
                            <br></br>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="last-name" name="last_name"
                                        placeholder="Last Name">
                                    <label for="last-name">Email Address</label>
                                </div>
                            </div>
                            <br></br>
                            <div class="col-md-12">
                                <button id="signup" class="btn btn-primary w-100 py-3" type="submit">Sign Up</button>
                            </div>
                            
                    </form>
                </div>
            </div>
          </div>
        </div>
            <br></br>
            <br></br>
            <div class="col-lg-12">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/signup-1.jpg" ?>>
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/signup-2.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/signup-3.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/signup-4.jpg" ?>>
                    </div>
                    </div>
            </div>
    </div>
</div>
<!-- Sign Up End -->

<?php get_footer() ?>