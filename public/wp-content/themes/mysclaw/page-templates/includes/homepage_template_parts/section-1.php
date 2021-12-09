<section id='section-one'>

  <div id='sec-one-inner'>

    <?php if (get_field('wistia_id') && get_field('wistia_thumb')) {?>

    <div id='sec-one-video' class='global-video'>

      <div
        class='mywistia wistia_embed wistia_async_<?php the_field('wistia_id');?> popover=true popoverContent=thumbnail"'
        data-wistia='<?php the_field('wistia_id');?>'>

      </div><!-- mywistia  data-wistia=''-->

      <?php $wistia_thumb = get_field('wistia_thumb');?>
      <?php if ($wistia_thumb) {?>
      <img id='video-thumb' src="<?php echo $wistia_thumb['url']; ?>" alt="<?php echo $wistia_thumb['alt']; ?>" />
      <?php }?>

      <span class='play-button'></span><!-- play-button -->

    </div><!-- sec-one-video -->

    <?php }?>

    <span id='sec-one-title'><?php the_field('section_one_title');?></span><!-- sec-one-title -->

    <?php if (have_rows('section_one_selling_points')): ?>
    <ul id='sec-one-selling-points'>
      <?php while (have_rows('section_one_selling_points')): the_row();?>
      <li><?php the_sub_field('selling_point');?></li>
      <?php endwhile;?>
    </ul>
    <?php endif;?>

    <a class='sec-one-button button-two' href='#consultation'><?php the_field('section_one_button_verbiage');?></a>
    <!-- sec-one-button button-two -->

  </div><!-- sec-one-inner -->

  <picture>

    <?php $section_one_background_desktop = get_field('section_one_background_desktop');?>
    <?php if ($section_one_background_desktop) {?>
    <source media='(min-width: 1170px)' srcset='<?php echo $section_one_background_desktop['url']; ?>'>

    <?php }?>

    <?php $section_one_background_tablet = get_field('section_one_background_tablet');?>
    <?php if ($section_one_background_tablet) {?>

    <source media='(min-width: 768px)' srcset='<?php echo $section_one_background_tablet['url']; ?>'>
    <?php }?>

    <?php $section_one_background_mobile = get_field('section_one_background_mobile');?>

    <img id='hero' src="<?php echo $section_one_background_mobile['url']; ?>"
      alt="<?php echo $section_one_background_mobile['alt']; ?>" />

  </picture>

</section><!-- section-one -->