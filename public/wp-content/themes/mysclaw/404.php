<?php get_header();?>

<div id="internal-main">

  <div id='page-container' class='two-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <div id='page-content'>

      <div id='page-content-inner' class='content'>

        <h1 id='page-title'><?php the_field('not_found_title', 'option');?></h1><!-- page-title -->

        <?php the_field('not_found_content', 'option');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>