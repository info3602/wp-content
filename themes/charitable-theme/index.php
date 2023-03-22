
<?php get_header();?>

<section class="banner-image-section" style= "background-image: url(https://picsum.photos/200/300);" >
  <div class="banner-image-overlay"></div>
  <div class="banner-image-content">
    <h1 class="banner-image-title">Welcome To The Blog</h1>
    <h2 class="banner-image-subtitle">--This the blog--</h2>
  </div>
</section>

<div class="category-bar">
  <a href="<?php echo get_post_type_archive_link("post")?>" class="active" >All</a>
  <a href="<?php echo get_post_type_archive_link("news")?>">News</a>
  <a href="<?php echo get_post_type_archive_link("opportunities")?>">Volunteer Opportunities</a>
  <a href="<?php echo get_post_type_archive_link("story")?>" >Impact Stories</a>
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


<div class="post-cards">
<?php
while ($posts_query->have_posts()) {
  $posts_query->the_post();
    if((get_post_type() != "page" ) and (get_post_type() != "post" ) ){
  ?>
    
        <a href="<?php echo the_permalink()?>" class="post-card">
            <div class="post-card-image" style="background-image:url(https://picsum.photos/200/300)"></div>
            <div class="post-card-content">
            <span class="post-card-category"><?php echo get_post_type()?></span>
            <h3 class="post-card-title"><?php the_title()?></h3>
            <span class="post-card-date"><?php the_date()?></span>
            </div>
        </a>

<?php }
  }
wp_reset_postdata();
  
?>
</div>
<?php get_footer();

?>