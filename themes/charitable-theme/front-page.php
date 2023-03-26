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
          <div class="p-3" style="max-width: 700px">
            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">
              Earthquake Appeal
            </h6>
            <h1 class="display-3 text-white mb-4 animated slideInDown">
              Help families in Turkey and Syria today
            </h1>
            <a href=<?php echo site_url("/donate"); ?>
              class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate Now</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 700px">
            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">
              Earthquake Appeal
            </h6>
            <h1 class="display-3 text-white mb-4 animated slideInDown">
              Hundreds of thousand of lives affected by this tragedy
            </h1>
            <a href=<?php echo site_url("/donate"); ?>
              class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Donate Now</a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
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
        <h6 class="section-title text-start text-primary text-uppercase">
          Rationale
        </h6>
        <h1 class="mb-4">
          Help save <span class="text-primary text-uppercase">lives</span>
        </h1>
        <p class="mb-4">
          Emergency response teams are racing against time to respond to the
          devastating 7.8 magnitude earthquake in Turkey and Syria. <br /><br />
          We need your help to provide life-saving support to those affected.
          <br /><br />
          Thousands of people have been seriously injured and need urgent
          medical support. Thousands more have been made homeless. <br /><br />
          As temperatures plummet below freezing, families made homeless by the
          earthquake need food, water and shelter. <br /><br />
          Please give what you can today to help families in need.
        </p>

        <a class="btn btn-primary py-3 px-5 mt-2" href=<?php echo site_url("/donate"); ?>>Donate Now</a>
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

<!-- News Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title text-start text-primary text-uppercase">
        Featured
      </h6>
      <h1 class="mb-5">Latest News</h1>
    </div>
    <div class="row g-4">
      <?php
      $news = new WP_Query(
        array(
          'posts_per_page' =>
          -1,
          'post_type' => 'news'
        )
      );
      while ($news->have_posts()) {
        $news->the_post(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <a class="service-item rounded" href=<?php the_permalink(); ?>>
            <div>
              <div class="card-img-div">
                <img class="card-img" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
              </div>
            </div>
            <p class="text-body card-date mb-0">
              <?php echo the_time("M j, Y") . " | " . strtoupper(get_post_type()); ?>
            </p>
            <h5 class="mb-3" style="color:var(--primary);">
              <?php echo trim(substr(get_the_title(), 0, 35)), (strlen(get_the_title()) > 35) ? " ..." : ""; ?>
            </h5>
            <p class="text-body mb-0">
              <?php echo trim(substr(get_the_content(), 0, 60)), (strlen(get_the_content()) > 35) ? " ..." : ""; ?>
            </p>
          </a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
<!-- News End -->

<!-- Infographic Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <h6 class="section-title text-start text-primary text-uppercase">
          Statistics
        </h6>
        <h1 class="mb-4">
          Earthquake disaster in
          <span class="text-primary text-uppercase">Numbers</span>
        </h1>
        <p class="mb-4">
          Over 50,000 people have tragically lost their lives. Over
          100,000 people have been seriously injured and thousands of
          families have been left homeless in the bitter cold.
          <br /><br />
          CHARITABLE teams are working on the ground in Turkey and Syria
          with local communities to provide: <br /><br />
          <i class="fa fa-solid fa-arrow-right text-primary mb-2"></i>
          Shelter, blankets and heating for people who have lost their
          homes <br /><br />
          <i class="fa fa-solid fa-arrow-right text-primary mb-2"></i>
          Food and clean water to ensure families can survive the winter
          <br /><br />
          <i class="fa fa-solid fa-arrow-right text-primary mb-2"></i>
          Healthcare and psychosocial support for communities affected
        </p>
      </div>
      <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
        <div class="row g-3 pb-4">
          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="border rounded p-1">
              <div class="border rounded text-center p-4">
                <i class="fa fa-solid fa-skull-crossbones fa-2x text-primary mb-2"></i>
                <h2 class="mb-1" data-toggle="counter-up">+50K</h2>
                <p class="mb-0">Killed</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="border rounded p-1">
              <div class="border rounded text-center p-4">
                <i class="fa fa-solid fa-user-injured fa-2x text-primary mb-2"></i>
                <h2 class="mb-1" data-toggle="counter-up">+100K</h2>
                <p class="mb-0">Injured</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="border rounded p-1">
              <div class="border rounded text-center p-4">
                <i class="fa fa-solid fa-exclamation fa-2x text-primary mb-2"></i>
                <h2 class="mb-1" data-toggle="counter-up">+23M</h2>
                <p class="mb-0">Affected</p>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-primary py-3 px-5 mt-2" href=<?php echo site_url("/donate"); ?>>Donate Now</a>
      </div>
    </div>
  </div>
</div>
<!-- Infographic End -->

<!-- Stories Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title text-start text-primary text-uppercase">
        Featured
      </h6>
      <h1 class="mb-5">Impact Stories</h1>
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
              <div class="card-img-div">
                <img class="card-img" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
              </div>
            </div>
            <p class="text-body card-date mb-0">
              <?php echo the_time("M j, Y") . " | " . strtoupper(get_post_type()); ?>
            </p>
            <h5 class="mb-3" style="color:var(--primary);">
              <?php echo trim(substr(get_the_title(), 0, 35)), (strlen(get_the_title()) > 35) ? " ..." : ""; ?>
            </h5>
            <p class="text-body mb-0">
              <?php echo trim(substr(get_the_content(), 0, 60)), (strlen(get_the_content()) > 35) ? " ..." : ""; ?>
            </p>
          </a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
<!-- Stories End -->

<!-- Split Start -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
  <div class="row g-0">
    <div class="col-md-6 bg-dark d-flex align-items-center">
      <div class="p-5">
        <h6 class="section-title text-start text-white text-uppercase mb-3">Help Us</h6>
        <h1 class="text-white mb-4">Make a difference today</h1>
        <p class="text-white mb-4">When a disaster strikes, recovery efforts led by people who live and work in
          affected communities are often overlooked and underfunded. Charitable is changing this reality.
        </p>
        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Donate Now</a>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-center"
      style="background-image: url(<?php echo get_theme_file_uri("/img/carousel-3.jpg"); ?>)">
    </div>
  </div>
</div>

<!-- Split Start -->

<!-- Opportunities Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title text-start text-primary text-uppercase">
        Featured
      </h6>
      <h1 class="mb-5">Volunteering Opportunities</h1>
    </div>
    <div class="row g-4">
      <?php
      $news = new WP_Query(
        array(
          'posts_per_page' =>
          -1,
          'post_type' => 'opportunities'
        )
      );
      while ($news->have_posts()) {
        $news->the_post(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <a class="service-item rounded" href=<?php the_permalink(); ?>>
            <div>
              <div class="card-img-div">
                <img class="card-img" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
              </div>
            </div>
            <p class="text-body card-date mb-0">
              <?php echo the_time("M j, Y") . " | " . strtoupper(get_post_type()); ?>
            </p>
            <h5 class="mb-3" style="color:var(--primary);">
              <?php echo trim(substr(get_the_title(), 0, 35)), (strlen(get_the_title()) > 35) ? " ..." : "";
              ?>
            </h5>
            <p class="text-body mb-0">
              <?php echo trim(substr(get_the_content(), 0, 60)), (strlen(get_the_content()) > 35) ? " ..." : ""; ?>
            </p>
          </a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
<!-- Opportunities End -->

<?php
get_footer();
?>