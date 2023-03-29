<div class="comment-form">
    <?php
    comment_form();
    ?>
</div>



<?php
if (have_comments()) { ?>
    <div class="spacer-50"></div>
    <h3 class="comment-reply-title">Replies</h3>
    <div class="spacer-10"></div>
<?php }
?>



<div class="comment-section">
    <?php
    wp_list_comments(
        array(
            'style' => 'div'
        )
    ); ?>
</div>

<div class="spacer-10"></div>

<div class="comment-links">
    <?php
    paginate_comments_links();
    ?>
</div>