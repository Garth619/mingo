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

<body <?php body_class();?>>

  <header>

    <div id='header-inner'>

      <div id='header-left'>

        <a id='logo' href='<?php bloginfo('url');?>'>

          <picture>

            <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory');?>/images/logo.svg'>

            <img src='<?php bloginfo('template_directory');?>/images/logo-lt.svg' alt='' />

          </picture>

        </a><!-- logo -->

      </div><!-- header-left -->

      <div id='header-right'>

        <div id='header-right-contact'>

          <div id='header-free-consult'>

            <span>free consultation</span>

            <a id='phone' href='tel:+14142737400'>(414) 273-7400</a><!-- phone -->

          </div><!-- header-free-consult -->

          <a class='button spanish-button' href=''>español</a>
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