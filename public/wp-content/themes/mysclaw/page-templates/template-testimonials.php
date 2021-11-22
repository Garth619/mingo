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

      <?php if (have_rows('testimonials')): ?>
      <?php while (have_rows('testimonials')): the_row();?>

      <div class='single-testimonial'>

        <div class='single-testi-header'>

          <img src='<?php bloginfo('template_directory');?>/images/ico-wreath-L.svg' alt='' />

          <span class='single-testi-title'><?php the_sub_field('intro');?></span>
          <!-- single-testi-title -->

          <img src='<?php bloginfo('template_directory');?>/images/ico-wreath-R.svg' alt='' />

        </div><!-- single-testi-header -->

        <div class='single-testi-content'>

          <p><?php the_sub_field('content');?></p>

          <span class='name'><?php the_sub_field('name');?></span><!-- name -->

        </div><!-- single-testi-content -->

      </div><!-- single-testimonial -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- testimonial-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>