<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/values-0.webp") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?php the_title(); ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                <?php
                        global $wp_query;
                        $post = $wp_query->post;
                        $ancestors = get_post_ancestors($post);
                        if(count($ancestors)!= 0){
                            $ancestors = array_reverse($ancestors);
                            foreach($ancestors as $value){
                           
                        ?>  
                                <li class="breadcrumb-item"><a href="<?php echo get_the_permalink($value);?>"><?php echo get_the_title($value);?></a></li>

                    <?php
                            }
                        }?>
                                <li class="breadcrumb-item text-white active" aria-current="page"><?php the_title()?></li>
                
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Values Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Values</h6>
            <h1 class="mb-5">Our work is guided by these <span class="text-primary text-uppercase">Values</span></h1>
        </div>

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

        </div>

        <div class="row g-4 values">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-solid fa-people-carry fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Humanitarianism</h5>
                    <p class="text-body mb-0">We believe in the essential dignity and respect of all human beings, and
                        in serving, supporting and advocating on behalf of poor, marginalised people and those affected
                        by conflict and crises.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-fist-raised fa-2x text-primary"></i>

                        </div>
                    </div>
                    <h5 class="mb-3">Courage</h5>
                    <p class="text-body mb-0">We believe in standing with the vulnerable communities we serve, taking
                        the necessary risks, appropriately assessed, in order to respond effectively to people’s needs.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-spa fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Integrity</h5>
                    <p class="text-body mb-0">Our actions and relationships with our stakeholders are characterised by
                        honesty and openness in all our dealings.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-award fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Respect</h5>
                    <p class="text-body mb-0">We value others. We listen to them and we believe in the power of
                        partnership to effect change in people’s lives.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-handshake fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Partnership</h5>
                    <p class="text-body mb-0">We believe that Charitable's work is optimised when we work in
                        partnership with
                        vulnerable communities, local civil society partners, peers, governments, donors and both the
                        public and private sectors.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-exchange-alt fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Transparency</h5>
                    <p class="text-body mb-0">We commit to transparent reporting and will update you on how we've used
                        donations to this fund.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Values End -->


<?php get_footer() ?>