<?php get_header();?>

<div id="internal-main">

  <h1 id='page-title' class='blog-title'><?php $blog_title = get_the_title(get_option('page_for_posts', true));
echo $blog_title;?></h1>
  <!-- page-header -->

  <?php get_template_part('loop', 'index');?>

  <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

  <?php get_footer();?>