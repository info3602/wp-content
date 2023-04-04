<?php get_header(); ?>

<div class="container-fluid page-header mb-5 p-0"
  style="background-image: url(<?php echo get_theme_file_uri("img/blog-1.webp") ?>);">
  <div class="container-fluid page-header-inner py-5">
    <div class="container text-center pb-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">
        All Posts
      </h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase">
          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
          <li class="breadcrumb-item text-white active" aria-current="page">All</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<div class="category-bar">
  <div class="category-item-container">
    <a href=<?php echo site_url("/blog") ?> class="active">All</a>
    <a href=<?php echo site_url("/news") ?>>News</a>
    <a href=<?php echo site_url("/opportunities") ?>>Opportunities</a>
    <a href=<?php echo site_url("/story") ?>>Stories</a>
  </div>
</div>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
  'post_type' => array(
    'story',
    'opportunities',
    'news',
  ),
  'posts_per_page' => 6,
  'orderby' => 'date',
  'order' => 'DESC',
  'paged' => $paged,
);
$posts_query = new WP_Query($args);
?>

<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <?php
      while ($posts_query->have_posts()) {
        $posts_query->the_post();
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
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<?php
$total_pages = $posts_query->max_num_pages;
if ($total_pages > 1) {
  $current_page = max(1, get_query_var('paged'));
  ?>
  <div class="paginate-links">
    <?php
    echo paginate_links(
      array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
      )
    );
    ?>
  </div>
  <?php
}
get_footer();
?>