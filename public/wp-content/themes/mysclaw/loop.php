<?php if (!have_posts()): ?>

<div id="post-0" class="post error404 not-found">

  <h2>Not Found</h2>

  <div class="entry-content">
    <p>Apologies, but no posts have been created</p>

  </div><!-- .entry-content -->
</div><!-- #post-0 -->

<?php endif;?>

<div id="blog-feed">

  <?php if (have_posts()): while (have_posts()): the_post();?>

  <div class='blog-post<?php echo $novideo; ?>'>

    <div class='content'>

      <h2 class="post-header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

    </div><!-- content -->

    <div class='post-meta'>

      <span class='post-date'>Posted <?php $pfx_date = get_the_date();
        echo $pfx_date;?> in </span>
      <!-- post-date -->

      <?php echo get_the_category_list(); ?>

    </div><!-- post-meta -->

    <div class='content'>

      <?php echo wp_trim_words(get_the_content(), 44, '...'); ?>

    </div><!-- content -->

    <a class="button-one blog-button" href="<?php the_permalink();?>">Learn More</a>

    <?php edit_post_link(__('Edit'), '', '');?>

  </div><!-- blog-post -->

  <?php endwhile; // end of loop ?>

  <?php endif;?>

</div><!-- blog-feed -->

<?php my_numeric_posts_nav();?>