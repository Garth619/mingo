<?php get_header();?>

<?php get_header();?>

<div id="internal-main">

  <h1 id='page-title' class='blog-title'>
    <?php printf(__('<span>%s</span>'), get_the_date(_x('Y', 'yearly archives date format')));?></h1>
  <!-- page-header -->

  <?php get_template_part('loop', 'index');?>

  <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

</div><!-- internal-main -->

<?php get_footer();?>