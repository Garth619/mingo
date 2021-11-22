<?php

/* Template Name: Video Center */

get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='single-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <?php if (!get_field('banner_h1') == "Yes"): ?>

    <h1 id='page-title' class='page-title-large page-title-center'><?php the_title();?></h1><!-- page-title -->

    <?php endif;?>

    <?php if (have_rows('video_options')): ?>

    <div id='video-center-wrapper' class='single-col-wrapper'>

      <?php while (have_rows('video_options')): the_row();?>

      <?php get_template_part('page-templates/includes/video/template', 'video');?>

      <?php endwhile;?>

    </div><!-- video-center-wrapper -->

    <?php if (get_field('wistia_or_youtube') == 'Wistia') {?>

    <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

    <?php }?>

    <?php endif;?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>