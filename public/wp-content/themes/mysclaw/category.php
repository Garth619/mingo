<?php get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner_blog', 'option')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_blog');

}?>

  <div id='page-container' class='two-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <div id='page-content'>

      <div id='page-content-inner'>

        <?php if (!get_field('banner_h1_blog', 'option') == "Yes"): ?>

        <h1 id='page-title'><?php single_cat_title();?>
        </h1>
        <!-- page-header -->

        <?php endif;?>

        <?php get_template_part('loop', 'index');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php get_sidebar('blog');?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>