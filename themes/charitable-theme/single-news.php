<?php get_header() ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              <?php
                  echo the_title(); 
                ?>
            </h1>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo site_url("/news");?>">News</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">DATE</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">AUTHOR</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">DURATION</li>
                    
                </ol>
            </nav>
        </div>
    </div>
</div>

        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">Latest News</h6>
                        <h1 class="text-white mb-4">Thousands killed in major quakes</h1>
                        <p class="text-white mb-4">Combined death toll from Turkey and Syria quakes passes 1,400
                        The combined death toll from the two large earthquakes that struck Turkey and Syria on Monday has reached at least 1,400 people.
                        Official figures from Turkey say 912 people were killed there, 5,383 were injured, and 2,818 buildings had collapsed. Syria’s health ministry said that more than 326 people had been killed and 1,042 injured.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->

        <!-- More News Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Related <span class="text-primary text-uppercase">News</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-1.jpg" alt="">
                                
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Thousands dead, millions displaced: the earthquake fallout in Turkey and Syria</h5>  
                                </div>
                                
                                <p class="text-body mb-3">The figures are unfathomable: 47,000 people dead, thousands of others missing, 
                                    millions homeless. In minutes, two massive earthquakes that rocked Turkey and Syria turned entire cities into mounds of rubble. 
                                    Two weeks later, the scale of the devastation is still being unearthed. The true impact will not be fully understood for decades.
                                    How many people have been affected? Turkey’s death toll has climbed above 41,000, the country’s disaster authority has said. 
                                    This number is expected to rise further, given that more than 345,000 apartments were destroyed and many people are still unaccounted for. 
                                    In Syria, already devastated by years of war, authorities have said more than 5,800 people died.
                                    Hans Kluge, the World Health Organization’s Europe director, said relief workers were facing “the worst natural disaster in the region for a century”, adding that 26 million people need assistance across both countries. 
                                    The WHO launched the largest rescue operation of its kind in the organisation’s 75-year history.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-2.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">...Put Another News Highlight Here...</h5>
                                </div>
                               
                                <p class="text-body mb-3">.....Put News Here....</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-3.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">...Put Another News Highlight Here...</h5>
                                    
                                </div>
                                
                                <p class="text-body mb-3">.....Put News Here....</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- More News End -->


<?php get_footer() ?>