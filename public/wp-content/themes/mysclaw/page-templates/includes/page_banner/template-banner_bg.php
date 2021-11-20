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