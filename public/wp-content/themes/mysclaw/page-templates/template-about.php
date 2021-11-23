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

      <div id='about-left' class='content'>

        <?php if (!get_field('banner_h1') == "Yes"): ?>

        <h1 id='page-title' class='page-title-large page-title-center'><?php the_title();?></h1><!-- page-title -->

        <?php endif;?>

        <div id='about-img-wrapper'>

          <img id='about-img' src='<?php bloginfo('template_directory');?>/images/Img-2.jpg' alt='' />

        </div><!-- about-img-wrapper -->

        <?php the_content();?>

      </div><!-- about-left -->

      <div id='about-right' class='content'>

      </div><!-- about-right -->

    </div><!-- about-wrapper -->

    <div id='about-slider-wrapper'>

      <span id='about-slider-title'>AwARDS + ACCOLADES</span><!-- about-slider-title -->

      <div id='about-slider-inner'>

        <div id='about-slider'>

          <div class='about-slide'>

            <div class='about-slide-inner'>

              <img src='<?php bloginfo('template_directory');?>/images/aw-1.jpg' alt='' />

            </div><!-- about-slide-inner -->

          </div><!-- about-slide -->

          <div class='about-slide'>

            <div class='about-slide-inner'>

              <img src='<?php bloginfo('template_directory');?>/images/aw-2.jpg' alt='' />

            </div><!-- about-slide-inner -->

          </div><!-- about-slide -->

          <div class='about-slide'>

            <div class='about-slide-inner'>

              <img src='<?php bloginfo('template_directory');?>/images/aw-3.jpg' alt='' />

            </div><!-- about-slide-inner -->

          </div><!-- about-slide -->

          <div class='about-slide'>

            <div class='about-slide-inner'>

              <img src='<?php bloginfo('template_directory');?>/images/aw-4.jpg' alt='' />

            </div><!-- about-slide-inner -->

          </div><!-- about-slide -->

          <div class='about-slide'>

            <div class='about-slide-inner'>

              <img src='<?php bloginfo('template_directory');?>/images/aw-5.jpg' alt='' />

            </div><!-- about-slide-inner -->

          </div><!-- about-slide -->

        </div><!-- about-slider -->

        <div id='arrow-buttons'>

          <div id='arrow-button-left' class='arrow-button'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg'); ?>

          </div><!-- arrow-button-left -->

          <div id='arrow-button-right' class='arrow-button'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg'); ?>

          </div><!-- arrow-button-right -->

        </div><!-- about-buttons -->

      </div><!-- about-slider-inner -->

    </div><!-- about-slider-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>