<div id='banner-wrapper'>

  <div id='banner-content'>

    <?php if (is_home()) {?>

    <?php if (get_field('banner_h1_blog', 'option') == "Yes"): ?>

    <h1 id='banner-title' class='<?php echo banner_title_width($get_field_global_banner); ?>'> <?php $blog_title = get_the_title(get_option('page_for_posts', true));
    echo $blog_title;?></h1>
    <!-- page-title -->

    <?php else: ?>

    <span id='banner-title'
      class='<?php echo banner_title_width($get_field_global_banner); ?>'><?php the_field('global_internal_banner_title', 'option');?></span>
    <!-- banner-title -->

    <?php endif;?>

    <?php }?>

    <?php if (is_category()) {?>

    <?php if (get_field('banner_h1_blog', 'option') == "Yes"): ?>

    <h1 id='banner-title' class='<?php echo banner_title_width($get_field_global_banner); ?>'>
      <?php single_cat_title();?>
    </h1>
    <!-- page-title -->

    <?php else: ?>

    <span id='banner-title'
      class='<?php echo banner_title_width($get_field_global_banner); ?>'><?php the_field('global_internal_banner_title', 'option');?></span>
    <!-- banner-title -->

    <?php endif;?>

    <?php }?>

    <?php if (is_archive() && !is_category()) {?>

    <?php if (get_field('banner_h1_blog', 'option') == "Yes"): ?>

    <h1 id='banner-title' class='<?php echo banner_title_width($get_field_global_banner); ?>'>
      <?php printf(__('<span>%s</span>'), get_the_date(_x('Y', 'yearly archives date format')));?>
    </h1>
    <!-- page-title -->

    <?php else: ?>

    <span id='banner-title' class='<?php echo banner_title_width($get_field_global_banner); ?>'>
      <?php the_field('global_internal_banner_title', 'option');?>
    </span>
    <!-- banner-title -->

    <?php endif;?>

    <?php }?>

    <a class='banner-button button-two'
      href='#consultation'><?php the_field('global_internal_banner_button_verbiage', 'option');?></a><!-- button-two -->

  </div><!-- banner-content -->

  <picture>

    <?php $banner_image_desktop_blog = get_field('banner_image_desktop_blog', 'option');?>
    <?php $global_internal_banner_image_desktop = get_field('global_internal_banner_image_desktop', 'option');?>

    <?php if ($banner_image_desktop_blog): ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $banner_image_desktop_blog['url']; ?>'
      alt="<?php echo $banner_image_desktop_blog['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $global_internal_banner_image_desktop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_desktop['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_tablet_blog = get_field('banner_image_tablet_blog', 'option');?>
    <?php $global_internal_banner_image_tablet = get_field('global_internal_banner_image_tablet', 'option');?>

    <?php if ($banner_image_tablet_blog): ?>

    <source media='(min-width: 768px)' srcset='<?php echo $banner_image_tablet_blog['url']; ?>'
      alt="<?php echo $banner_image_tablet_blog['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 768px)' srcset='<?php echo $global_internal_banner_image_tablet['url']; ?>'
      alt="<?php echo $global_internal_banner_image_tablet['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_mobile_blog = get_field('banner_image_mobile_blog', 'option');?>
    <?php $global_internal_banner_image_mobile = get_field('global_internal_banner_image_mobile', 'option');?>

    <?php if ($banner_image_mobile_blog): ?>

    <img id='banner-image' src='<?php echo $banner_image_mobile_blog['url']; ?>'
      alt='<?php echo $banner_image_mobile_blog['alt']; ?>' />

    <?php else: ?>

    <img id='banner-image' src='<?php echo $global_internal_banner_image_mobile['url']; ?>'
      alt='<?php echo $global_internal_banner_image_mobile['alt']; ?>' />

    <?php endif;?>

  </picture>

</div><!-- banner-wrapper -->