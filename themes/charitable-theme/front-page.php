<?php
    get_header();
?>
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src=<?php echo get_template_directory_uri() . "/img/carousel-5.jpg" ?> alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Earthquake Appeal</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Help families in Turkey and Syria today</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Earthquake Appeal</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Hundreds of thousand lives affected by this tragedy</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
     
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="mb-4">Help save  <span class="text-primary text-uppercase">lives</span></h1>
                        <p class="mb-4">Emergency response teams are racing against time to respond to the devastating 7.8 magnitude earthquake in Turkey and Syria.
                            <br><br> We need your help to provide life-saving support to those affected.
                            <br><br> Thousands of people have been seriously injured and need urgent medical support. Thousands more have been made homeless.
                            <br><br> As temperatures plummet below freezing, families made homeless by the earthquake need food, water and shelter.
                            <br><br> Please give what you can today to help families in need.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-solid fa-skull-crossbones fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">+50K</h2>
                                        <p class="mb-0">People Killed</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-solid fa-user-injured fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">+100K</h2>
                                        <p class="mb-0">People injured</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-solid fa-exclamation fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">+23M</h2>
                                        <p class="mb-0">People affected</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Donate Now</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-3.jpg" ?>>
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?>>
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-5.jpg" ?>>
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-6.jpg" ?>>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<?php
    get_footer();
?>