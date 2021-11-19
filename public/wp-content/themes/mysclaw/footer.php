<footer id="consultation">

  <div id='footer-inner'>

    <div id='footer-form'>

      <span id='footer-form-title'>FREe CASE CONSULTATION</span><!-- footer-form-title -->

      <?php gravity_form(1, false, false, false, '', true, 1233);?>

    </div><!-- footer-form -->

    <div id='footer-address'>

    </div><!-- footer-address -->

    <div id='copyright'>

    </div><!-- copyright -->

    <a id='ilawermarketing' href='//ilawyermarketing.com' target='_blank' rel='noopener'>
      <img src='<?php bloginfo('template_directory');?>/images/ilawyer.svg' alt='' />
    </a><!-- ilawermarketing -->

  </div><!-- footer-inner -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

</body>

</html>