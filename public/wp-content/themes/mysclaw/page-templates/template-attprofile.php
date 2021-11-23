<?php

/* Template Name: Attorney Profile */

get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='single-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <?php if (!get_field('banner_h1') == "Yes"): ?>

    <?php if (get_field('attorney_subtitle')): ?>

    <div id='att-header'>

      <img src='<?php bloginfo('template_directory');?>/images/ico-wreath-L.svg' alt='' />

      <span id='att-header-subtitle'><?php the_field('attorney_subtitle');?></span>
      <!-- att-header-subtitle -->

      <img src='<?php bloginfo('template_directory');?>/images/ico-wreath-R.svg' alt='' />

    </div><!-- att-header -->

    <?php endif;?>

    <h1 id='page-title' class='page-title-large page-title-center'><?php the_title();?></h1><!-- page-title -->

    <?php endif;?>

    <div id='att-wrapper'>

      <?php $attorney_image = get_field('attorney_image');?>

      <?php if ($attorney_image) {?>

      <div id='att-left'>

        <div id='att-profile'>

          <img id='att-img' src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />

        </div><!-- att-profile -->

      </div><!-- att-left -->

      <?php }?>

      <div id='att-right' class='content'>

        <?php the_content();?>

      </div><!-- att-right -->

    </div><!-- att-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>