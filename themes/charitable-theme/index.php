
<?php get_header();?>

<section class="banner-image-section" style= "background-image: url(https://picsum.photos/200/300);" >
  <div class="banner-image-overlay"></div>
  <div class="banner-image-content">
    <h1 class="banner-image-title">Welcome To The Blog</h1>
    <h2 class="banner-image-subtitle">--This the blog--</h2>
  </div>
</section>
<!-- get_post_type_archive_link("post") -->
<div class="category-bar">
  <a href="<?php echo site_url("/blog")?>" class="active" >All</a>
  <a href="<?php echo site_url("/news")?>">News</a>
  <a href="<?php echo site_url("/opportunities")?>">Volunteer Opportunities</a>
  <a href="<?php echo site_url("/story")?>" >Impact Stories</a>
</div>
<?php

  
  $args = array(
      'post_type' => "any",
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
  );

  $posts_query = new WP_Query( $args );
  
?>

<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <?php
      while ($posts_query->have_posts()) {
        $posts_query->the_post(); 
        if((get_post_type() != "post") and (get_post_type() != "page")){
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
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<?php 
  echo paginate_links();
  get_footer();

?>