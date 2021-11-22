<?php

/* Template Name: Testimonials */

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

    <div id='testimonial-wrapper' class='single-col-wrapper'>

      <div class='single-testimonial'>

        <div class='single-testi-header'>

          <?php echo file_get_contents(get_template_directory() . '/images/ico-wreath-L.svg'); ?>

          <span class='single-testi-title'>Mark and his team go into representing a client 110%</span>
          <!-- single-testi-title -->

          <?php echo file_get_contents(get_template_directory() . '/images/ico-wreath-R.svg'); ?>

        </div><!-- single-testi-header -->

      </div><!-- single-testimonial -->

    </div><!-- testimonial-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>