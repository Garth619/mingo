<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title('|', true, 'right');

// Add the blog name.
bloginfo('name');

// Add the blog description for the home/front page.
$site_description = get_bloginfo('description', 'display');
if ($site_description && (is_home() || is_front_page())) {
    echo " | $site_description";
}

// Add a page number if necessary:
if (($paged >= 2 || $page >= 2) && !is_404()) {
    echo esc_html(' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page)));
}

?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.typekit.net/bga3qek.css">

  <style>
  <?php the_field('review_css', 'option');
  ?>
  </style>

  <?php wp_head();?>

  <?php the_field('schema_code', 'option');?>

  <?php the_field('analytics_code', 'option');?>

</head>

<?php

$disable_banner = get_field('disable_banner');

if (!is_front_page()) {
    if ($disable_banner) {
        $internal_banner = 'no-banner';
    } else {
        $internal_banner = 'has-banner';
    }
}

?>

<body <?php body_class($internal_banner);?>>

  <header>

    <div id='header-inner'>

      <div id='header-left'>

        <a id='logo' href='<?php bloginfo('url');?>'>

          <picture>

            <?php $logo_light = get_field('logo_light', 'option');?>
            <?php if ($logo_light) {?>
            <source media='(min-width: 1170px)' srcset='<?php echo $logo_light['url']; ?>'>

            <?php }?>

            <?php $logo_dark = get_field('logo_dark', 'option');?>
            <?php if ($logo_dark) {?>
            <img src="<?php echo $logo_dark['url']; ?>" alt="<?php echo $logo_dark['alt']; ?>" />
            <?php }?>

          </picture>

        </a><!-- logo -->

      </div><!-- header-left -->

      <div id='header-right'>

        <div id='header-right-contact'>

          <div id='header-free-consult'>

            <span><?php the_field('free_consultation', 'option');?></span>

            <a id='phone'
              href='tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone', 'option')); ?>'><?php the_field('phone', 'option');?></a>
            <!-- phone -->

          </div><!-- header-free-consult -->

          <a class='button-one spanish-button'
            href='<?php the_field('spanish_button_link', 'option');?>'><?php the_field('spanish_button_verbiage', 'option');?></a>
          <!-- button spanish-button -->

        </div><!-- header-right-contact -->

        <div id='menu-wrapper'>

          <span></span>
          <span></span>
          <span></span>

        </div><!-- menu-wrapper -->

        <nav>
          <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'main_menu'));?>
        </nav>

      </div><!-- header-right -->

    </div><!-- header-inner -->

  </header>