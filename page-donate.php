<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/donate-1.jpg") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?php the_title(); ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Donate Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Donate</h6>
            <h1 class="mb-5">Help save lives <span class="text-primary text-uppercase">Today</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src=<?php echo get_template_directory_uri() . "/img/donate-2.jpg" ?> style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src=<?php echo get_template_directory_uri() . "/img/donate-3.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/donate-4.jpg" ?>>
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src=<?php echo get_template_directory_uri() . "/img/donate-5.jpg" ?>>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="first-name" placeholder="First Name">
                                    <label for="first-name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                                    <label for="last-name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="contact" placeholder="Contact Number">
                                    <label for="contact">Contact Number</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select1">
                                        <option value="1">Advertisement</option>
                                        <option value="2">Search Engine</option>
                                        <option value="3">Word-of-Mouth</option>
                                    </select>
                                    <label for="select1">How did you learn about Charitable?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select2">
                                        <option value="1">$50</option>
                                        <option value="2">$100</option>
                                        <option value="3">$150</option>
                                        <option value="4">$200</option>
                                    </select>
                                    <label for="select2">How much would you like to donate?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select3">
                                        <option value="1">Relief aid in Turkey</option>
                                        <option value="2">Relief aid in Syria</option>
                                        <option value="3">Wherever it's needed most</option>
                                    </select>
                                    <label for="select3">What would you like your money to go towards?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Donate Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->

<?php get_footer() ?>