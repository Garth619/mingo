<?php

/* Template Name: PA Directory */

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

    <div id='pa-directory-wrapper' class='single-col-wrapper'>

      <?php if (get_field('practice_area_directory')): ?>

      <ul class="pa_directory_top_menu">

        <?php while (has_sub_field('practice_area_directory')): ?>

        <li>

          <a><?php the_sub_field('title');?></a>

          <?php $obj = get_sub_field('pa_nav_menu');?>

          <?php wp_nav_menu(array('menu' => $obj->name));?>

        </li>

        <?php endwhile;?>

      </ul><!-- pa_directory_top_menu -->

      <?php endif;?>

    </div><!-- pa-directory-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>