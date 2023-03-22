
<?php get_header();?>

<section class="banner-image-section" style= "background-image: url(https://picsum.photos/200/300);" >
  <div class="banner-image-overlay"></div>
  <div class="banner-image-content">
    <h1 class="banner-image-title">Volunteer Opportunities</h1>
    <h2 class="banner-image-subtitle">--This the blog--</h2>
  </div>
</section>

<div class="category-bar">
<div class="category-bar">
  <a href="<?php echo get_post_type_archive_link("post")?>" >All</a>
  <a href="<?php echo get_post_type_archive_link("news")?>">News</a>
  <a href="<?php echo get_post_type_archive_link("opportunities")?>" class="active">Volunteer Opportunities</a>
  <a href="<?php echo get_post_type_archive_link("story")?>" >Impact Stories</a>
</div>

</div>


<div class="post-cards">
<?php
while (have_posts()) {
    the_post();?>

    
        <a href="<?php the_permalink()?>" class="post-card">
            <div class="post-card-image" style="background-image:url(https://picsum.photos/200/300)"></div>
            <div class="post-card-content">
            <span class="post-card-category">Category</span>
            <h3 class="post-card-title"><?php the_title()?></h3>
            <span class="post-card-date"><?php the_date()?></span>
            </div>
        </a>
        
        <!-- add more post cards here -->
    



<?php } ?>
</div>
<?php get_footer();
?>