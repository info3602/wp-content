
<?php get_header();?>

<section class="banner-image-section" style= "background-image: url(https://picsum.photos/200/300);" >
  <div class="banner-image-overlay"></div>
  <div class="banner-image-content">
    <h1 class="banner-image-title">Impact Stories</h1>
    <h2 class="banner-image-subtitle">--This the blog--</h2>
  </div>
</section>

<div class="category-bar">
  <a href="<?php echo site_url("/blog")?>">All</a>
  <a href="<?php echo site_url("/news")?>" >News</a>
  <a href="<?php echo site_url("/opportunities")?>">Volunteer Opportunities</a>
  <a href="<?php echo site_url("/story")?>" class="active">Impact Stories</a>
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
            <h5 class="mb-3">
              <?php echo strtoupper(get_post_type()); ?>
            </h5>
            <div>
              <div>
                <img class="w-75" src=<?php echo get_template_directory_uri() . "/img/carousel-4.jpg" ?> alt="Image">
              </div>
            </div>
            <p class="text-body mb-0">
              <?php echo the_date(); ?>
            </p>
            <h5 class="mb-3">
              <?php echo wp_trim_words(get_the_title(), 6); ?>
            </h5>
            <p class="text-body mb-0">
              <?php echo wp_trim_words(get_the_content(), 10); ?>
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