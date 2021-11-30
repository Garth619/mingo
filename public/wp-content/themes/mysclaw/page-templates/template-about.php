<?php

/* Template Name: About */

get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='single-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <div id='about-wrapper'>

      <div id='about-top' class='content'>

        <?php if (!get_field('banner_h1') == "Yes"): ?>

        <h1 id='page-title' class='page-title-large page-title-center'><?php the_title();?></h1><!-- page-title -->

        <?php endif;?>

        <?php $about_image = get_field('about_image');?>

        <?php if ($about_image) {?>

        <div class='about-img-wrapper'>

          <img class='about-img' src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />

        </div><!-- about-img-wrapper -->

        <?php }?>

        <?php the_content();?>

      </div><!-- about-top -->

      <div id='about-bottom'>

        <?php if ($about_image) {?>

        <div class='about-img-wrapper'>

          <img class='about-img' src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />

        </div><!-- about-img-wrapper -->

        <?php }?>

      </div><!-- about-bottom -->

    </div><!-- about-wrapper -->

    <?php if (have_rows('about_logos')): ?>

    <div id='about-slider-wrapper'>

      <span id='about-slider-title'><?php the_field('about_slide_title');?></span><!-- about-slider-title -->

      <div id='about-slider-inner'>

        <div id='about-slider'>

          <?php while (have_rows('about_logos')): the_row();?>

          <div class='about-slide'>

            <div class='about-slide-inner'>

              <?php $logos = get_sub_field('logos');?>

              <img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />

            </div><!-- about-slide-inner -->

          </div><!-- about-slide -->

          <?php endwhile;?>

        </div><!-- about-slider -->

        <div id='arrow-buttons'>

          <div id='arrow-button-left' class='arrow-button about-arrow-button-left'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg'); ?>

          </div><!-- arrow-button-left -->

          <div id='arrow-button-right' class='arrow-button about-arrow-button-right'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg'); ?>

          </div><!-- arrow-button-right -->

        </div><!-- about-buttons -->

      </div><!-- about-slider-inner -->

    </div><!-- about-slider-wrapper -->

    <?php endif;?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>