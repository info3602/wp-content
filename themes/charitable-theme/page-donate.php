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
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src=<?php echo get_template_directory_uri() . "/img/carousel-5.jpg" ?> style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?>>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src=<?php echo get_template_directory_uri() . "/img/carousel-3.jpg" ?>>
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src=<?php echo get_template_directory_uri() . "/img/carousel-5.jpg" ?>>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form type="submit" method="POST" action="" id="donate-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="first-name" name="first_name"
                                        placeholder="First Name">
                                    <label for="first-name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input required type="text" class="form-control" id="last-name" name="last_name"
                                        placeholder="Last Name">
                                    <label for="last-name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="contact" name="contact"
                                        placeholder="Contact Number">
                                    <label for="contact">Contact Number</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select1" name="source">
                                        <option value="Advertisement">Advertisement</option>
                                        <option value="Search Engine">Search Engine</option>
                                        <option value="Word-of-Mouth">Word-of-Mouth</option>
                                    </select>
                                    <label for="select1">How did you learn about Charitable?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select2" name="donation_amount">
                                        <option value=50>$50</option>
                                        <option value=100>$100</option>
                                        <option value=150>$150</option>
                                        <option value=200>$200</option>
                                    </select>
                                    <label for="select2">How much would you like to donate?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select3" name="target_area">
                                        <option value="Relief aid in Turkey">Relief aid in Turkey</option>
                                        <option value="Relief aid in Syria">Relief aid in Syria</option>
                                        <option value="Wherever it's needed most">Wherever it's needed most</option>
                                    </select>
                                    <label for="select3">What would you like your money to go towards?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="donate" class="btn btn-primary w-100 py-3" type="submit">Donate Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->

<script type="text/javascript">
    jQuery('#donate-form').submit(ajaxSubmit);

    function ajaxSubmit() {
        event.preventDefault();
        const form = event.target;
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        jQuery.ajax({
            type: "POST",
            url: "/wp-admin/admin-ajax.php?action=create_donation",
            data: data,
            success: function (res) {
                document.querySelector("#donate").textContent = "Thank you for your donation!";
                console.log(res);
            }
        });

        return false;
    }
</script>



<?php get_footer() ?>