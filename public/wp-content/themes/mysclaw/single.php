<?php get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='two-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <div id='page-content'>

      <div id='page-content-inner' class='content'>

        <?php if (!get_field('banner_h1') == "Yes"): ?>

        <h1 id='page-title'><?php the_title();?></h1><!-- page-title -->

        <?php endif;?>

        <div class='post-meta'>

          <span class='post-date'>Posted <?php $pfx_date = get_the_date();
echo $pfx_date;?> in </span>
          <!-- post-date -->

          <?php echo get_the_category_list(); ?>

        </div><!-- post-meta -->

        <?php the_content();?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>