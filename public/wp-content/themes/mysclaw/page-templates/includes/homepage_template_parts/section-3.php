<section id='section-three'>

  <div id='sec-three-inner'>

    <div id='sec-three-image-wrapper'>

      <?php $section_three_image = get_field('section_three_image');?>
      <?php if ($section_three_image) {?>
      <img class="lazyload" data-src="<?php echo $section_three_image['url']; ?>"
        alt="<?php echo $section_three_image['alt']; ?>" />
      <?php }?>

    </div><!-- sec-three-image-wrapper -->

    <div id='sec-three-content' class='content'>

      <h1 id='sec-three-title'><?php the_field('section_three_title');?></h1>

      <?php the_field('section_three_content');?>

    </div><!-- sec-three-content-->

  </div><!-- sec-three-inner -->

</section><!-- section-three -->