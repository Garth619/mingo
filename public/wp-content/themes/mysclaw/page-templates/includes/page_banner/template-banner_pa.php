<div id='banner-wrapper'>

  <div id='banner-content'>

    <?php

/**
 * uses banner_title_width() in functions.php
 */

$get_the_title = get_the_title();
$get_field_banner = get_field('banner_title');
$get_field_global_banner = get_field('global_internal_banner_title', 'option');

?>

    <?php if (get_field('banner_h1') == "Yes"): ?>

    <h1 id='banner-title' class='<?php echo banner_title_width($get_the_title); ?>'><?php the_title();?></h1>
    <!-- banner-title -->

    <?php else: ?>

    <?php if (get_field('banner_title')): ?>

    <span id='banner-title'
      class='<?php echo banner_title_width($get_field_banner); ?>'><?php the_field('banner_title');?></span>
    <!-- banner-title -->

    <?php else: ?>

    <span id='banner-title'
      class='<?php echo banner_title_width($get_field_global_banner); ?>'><?php the_field('global_internal_banner_title', 'option');?></span>
    <!-- banner-title -->

    <?php endif;?>

    <?php endif;?>

    <a class='banner-button button-two'
      href='#consultation'><?php the_field('global_internal_banner_button_verbiage', 'option');?></a><!-- button-two -->

  </div><!-- banner-content -->

  <picture>

    <?php $banner_image_desktop = get_field('banner_image_desktop');?>
    <?php $global_internal_banner_image_desktop = get_field('global_internal_banner_image_desktop', 'option');?>

    <?php if ($banner_image_desktop): ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $banner_image_desktop['url']; ?>'
      alt="<?php echo $banner_image_desktop['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $global_internal_banner_image_desktop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_desktop['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_tablet = get_field('banner_image_tablet');?>
    <?php $global_internal_banner_image_tablet = get_field('global_internal_banner_image_tablet', 'option');?>

    <?php if ($banner_image_tablet): ?>

    <source media='(min-width: 768px)' srcset='<?php echo $banner_image_tablet['url']; ?>'
      alt="<?php echo $banner_image_tablet['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 768px)' srcset='<?php echo $global_internal_banner_image_tablet['url']; ?>'
      alt="<?php echo $global_internal_banner_image_tablet['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_mobile = get_field('banner_image_mobile');?>
    <?php $global_internal_banner_image_mobile = get_field('global_internal_banner_image_mobile', 'option');?>

    <?php if ($banner_image_mobile): ?>

    <img id='banner-image' src='<?php echo $banner_image_mobile['url']; ?>'
      alt='<?php echo $banner_image_mobile['alt']; ?>' />

    <?php else: ?>

    <img id='banner-image' src='<?php echo $global_internal_banner_image_mobile['url']; ?>'
      alt='<?php echo $global_internal_banner_image_mobile['alt']; ?>' />

    <?php endif;?>

  </picture>

</div><!-- banner-wrapper -->