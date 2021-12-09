<section id='section-two'>

  <div id='sec-two-slider-wrapper'>

    <div id='sec-two-slider'>

      <?php if (have_rows('section_two_case_results')): ?>
      <?php while (have_rows('section_two_case_results')): the_row();?>

      <div class='sec-two-slide'>

        <div class='sec-two-slide-inner'>

          <?php if (get_sub_field('icon') == 'Medical') {?>

          <img id='medical-icon' src='<?php bloginfo('template_directory');?>/images/ico-01.svg' alt='medical-icon' />

          <?php }?>

          <?php if (get_sub_field('icon') == 'Boat') {?>

          <img id='medical-icon' src='<?php bloginfo('template_directory');?>/images/ico-02.svg' alt='boat-icon' />

          <?php }?>

          <?php if (get_sub_field('icon') == 'Car Accident') {?>

          <img id='car-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='car-icon' />

          <?php }?>

          <span class='sec-two-slide-amount'> <?php the_sub_field('amount');?></span><!-- sec-two-slide-amount -->

          <span class='sec-two-slide-type'> <?php the_sub_field('type');?></span><!-- sec-two-slide-type -->

          <span class='sec-two-slide-descrip'><?php the_sub_field('description');?> </span>
          <!-- sec-two-slide-descrip -->

        </div><!-- sec-two-slide-inner -->

      </div><!-- sec-two-slide -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- sec-two-slider -->

    <div id='arrow-buttons' class='sec-two-arrow-buttons'>

      <?php $auth = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

      <div id='arrow-button-left' class='arrow-button sec-two-arrow-button-left'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg', false, $auth); ?>

      </div><!-- arrow-button-left -->

      <div id='arrow-button-right' class='arrow-button sec-two-arrow-button-right'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow.svg', false, $auth); ?>

      </div><!-- arrow-button-right -->

    </div><!-- about-buttons -->

  </div><!-- sec-two-slider-wrapper -->

</section><!-- section-two -->