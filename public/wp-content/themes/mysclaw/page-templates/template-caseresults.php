<?php

/* Template Name: Case Results */

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

    <div id='case-results-wrapper' class='single-col-wrapper'>

      <?php if (have_rows('case_results')): ?>
      <?php while (have_rows('case_results')): the_row();?>

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <?php

    $icon = get_sub_field('icon');?>

          <?php if ($icon == 'Boat') {?>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg'
            alt='Case Result Icon' />

          <?php }?>

          <?php if ($icon == 'Medical') {?>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-01.svg'
            alt='Case Result Icon' />

          <?php }?>

          <?php if ($icon == 'Car Accident') {?>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-02.svg'
            alt='Case Result Icon' />

          <?php }?>

          <span class='single-case-result-title'><?php the_sub_field('amount');?></span>
          <!-- single-case-result-title -->

          <span class='single-case-result-type'><?php the_sub_field('case_result_type');?></span>
          <!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'><?php the_sub_field('case_result_type');?></span>
          <!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <?php the_sub_field('description');?>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- case-results-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>