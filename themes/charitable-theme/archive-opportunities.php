<?php get_header(); ?>

<div class="container-fluid page-header mb-5 p-0"
  style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
  <div class="container-fluid page-header-inner py-5">
    <div class="container text-center pb-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">
        <?php
        $Title = explode(":", get_the_archive_title())[1];
        echo $Title;
        ?>
      </h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase">
          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            <?php echo $Title ?>
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<div class="category-bar">
  <ul class="category-item-container">
    <a href=<?php echo site_url("/blog") ?>>All</a>
    <a href=<?php echo site_url("/news") ?>>News</a>
    <a href=<?php echo site_url("/opportunities") ?> class="active">Opportunities</a>
    <a href=<?php echo site_url("/story") ?>>Stories</a>
  </ul>
</div>


<div class="container-xxl py-5">
  <div class="container">

    <div class="row g-4">
      <?php
      while (have_posts()) {
        the_post();

        ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <a class="service-item rounded" href=<?php the_permalink(); ?>>
            <div>
              <div class="card-img-div">
                <img class="card-img" src=<?php echo the_post_thumbnail_url('card') ?> alt="Image">
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
<?php
echo paginate_links();
get_footer();
?>