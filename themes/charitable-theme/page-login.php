<?php get_header() ?>

<!-- Login Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Welcome to<span class="text-primary text-uppercase">Charitable</span></h1>
            <h6 class="section-title text-center text-primary text-uppercase">LOGIN </h6>
        </div>
        <br></br>
        <br></br>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src=<?php echo get_template_directory_uri() . "/img/login-1.jpg" ?> style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src=<?php echo get_template_directory_uri() . "/img/login-2.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/login-3.jpg" ?>>
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src=<?php echo get_template_directory_uri() . "/img/login-4.jpg" ?>>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form type="submit" method="POST" action="" id="login-form">
                        
                            <div class="col-12">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="first-name" name="first_name"
                                        placeholder="First Name">
                                    <label for="first-name">Username</label>
                                </div>
                            </div>
                            <br></br>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="last-name" name="last_name"
                                        placeholder="Last Name">
                                    <label for="last-name">Password</label>
                                </div>
                            </div>
                            <br></br>
                           
                            <div class="col-12">
                                <button id="login" class="btn btn-primary w-100 py-3" type="submit">Login</button>
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->

<?php get_footer() ?>