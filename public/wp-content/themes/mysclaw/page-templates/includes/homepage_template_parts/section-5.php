<section id='section-five'>

  <div id='sec-five-inner'>

    <div id='sec-five-top'>

      <span id='sec-five-title'><?php the_field('section_five_title');?></span><!-- sec-five-title -->

      <div id='arrow-buttons' class='sec-five-arrow-buttons'>

        <?php $auth = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

        <div id='arrow-button-left' class='arrow-button sec-five-arrow-button-left'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg', false, $auth); ?>

        </div><!-- arrow-button-left -->

        <div id='arrow-button-right' class='arrow-button sec-five-arrow-button-right'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg', false, $auth); ?>

        </div><!-- arrow-button-right -->

      </div><!-- about-buttons -->

    </div><!-- sec-five-top -->

    <div id='sec-five-slider'>

      <?php if (have_rows('section_five_reviews')): ?>
      <?php while (have_rows('section_five_reviews')): the_row();?>

      <div class='sec-five-slide'>

        <div class='sec-five-inner'>

          <img class='stars lazyload' data-src='<?php bloginfo('template_directory');?>/images/ico-starz.svg' alt='' />

          <span class='sec-five-title'><?php the_sub_field('intro');?></span>
          <!-- sec-five-title -->

          <span class='sec-five-descrip'><?php the_sub_field('description');?></span>
          <!-- sec-five-descrip -->

          <span class='sec-five-name'><?php the_sub_field('name');?></span><!-- sec-five-name -->

        </div><!-- sec-five-inner -->

      </div><!-- sec-five-slide -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- sec-five-slider -->

  </div><!-- sec-five-inner -->

  <div id='sec-five-bg'>

    <picture>

      <?php $section_five_background_desktop = get_field('section_five_background_desktop');?>
      <?php if ($section_five_background_desktop) {?>

      <source media='(min-width: 1170px)' data-srcset='<?php echo $section_five_background_desktop['url']; ?>'>

      <?php }?>

      <?php $section_five_background_tablet = get_field('section_five_background_tablet');?>
      <?php if ($section_five_background_tablet) {?>

      <source media='(min-width: 767px)' data-srcset='<?php echo $section_five_background_tablet['url']; ?>'>
      <?php }?>

      <img id='sec-five-bg-img' class='lazyload'
        data-src='<?php bloginfo('template_directory');?>/images/sec-five-placeholder.png' alt='' />

    </picture>

  </div><!-- sec-five-bg -->

</section><!-- section-five -->