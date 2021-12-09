<section id='section-seven'>

  <div id='sec-seven-inner'>

    <div id='sec-seven-content' class='content'>

      <?php the_field('section_seven_content');?>

    </div><!-- sec-seven-content -->

    <div id='sec-seven-image-wrapper'>

      <picture>

        <?php $section_seven_image_desktop = get_field('section_seven_image_desktop');?>
        <?php if ($section_seven_image_desktop) {?>
        <source media='(min-width: 1650px)' data-srcset='<?php echo $section_seven_image_desktop['url']; ?>'>
        <?php }?>

        <?php $section_seven_image_laptop = get_field('section_seven_image_laptop');?>
        <?php if ($section_seven_image_laptop) {?>
        <source media='(min-width: 1170px)' data-srcset='<?php echo $section_seven_image_laptop['url']; ?>'>
        <?php }?>

        <?php $section_seven_image_mobile = get_field('section_seven_image_mobile');?>

        <img id='sec-seven-image' class='lazyload' data-src='<?php echo $section_seven_image_mobile['url']; ?>'
          alt='<?php echo $section_seven_image_mobile['alt']; ?>' />

      </picture>

    </div><!-- sec-seven-image-wrapper -->

  </div><!-- sec-seven-inner -->

</section><!-- section-seven -->