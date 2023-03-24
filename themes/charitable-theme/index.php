
<?php get_header();?>

<div class="container-fluid page-header mb-5 p-0"
    style="background-image: url(<?php echo get_theme_file_uri("img/carousel-3.jpg") ?>);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
            All
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