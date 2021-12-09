<section id='section-four'>

  <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

  <div id='sec-four-top'>

    <div id='sec-four-header'>

      <img class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/ico-wreath-L.svg' alt='' />

      <span id='sec-four-subtitle'><?php the_field('section_four_sub_title');?></span>
      <!-- sec-four-header -->

      <img class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/ico-wreath-R.svg' alt='' />

    </div><!-- sec-four-header -->

    <?php if (get_field('section_four_intro')) {?>

    <div id='sec-four-intro' class='content'>

      <?php the_field('section_four_intro');?>

      <?php if (get_field('section_four_button_page_link')) {?>

      <a class='button-two sec-four-button'
        href='<?php the_field('section_four_button_page_link');?>'><?php the_field('section_four_button_verbiage');?></a>

      <?php }?>
      <!-- button-one -->

    </div><!-- sec-four-intro -->

    <?php }?>

  </div><!-- sec-four-top -->

  <div id='sec-four-content' class='content'>

    <div class='sec-four-col'>

      <?php the_field('section_four_col_one');?>

    </div><!-- sec-four-col -->

    <div class='sec-four-col'>

      <?php the_field('section_four_col_two');?>

    </div><!-- sec-four-col -->

  </div><!-- sec-four-content -->

</section><!-- section-four -->