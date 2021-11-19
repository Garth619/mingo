<footer id="consultation">

  <picture>

    <source media='(min-width: 1170px)' data-srcset='<?php bloginfo('template_directory');?>/images/bkg-ft.jpg'>

    <img id='footer-bg' class='lazyload' src='<?php bloginfo('template_directory');?>/images/mobile-placeholder.png'
      alt='' />

  </picture>

  <div id='footer-inner'>

    <div id='footer-form'>

      <span id='footer-form-title'>FREe CASE CONSULTATION</span><!-- footer-form-title -->

      <?php gravity_form(1, false, false, false, '', true, 1233);?>

    </div><!-- footer-form -->

    <div id='footer-contact'>

      <span id='footer-address'>330 East Kilbourn Ave<br> Suite 1221<br> Milwaukee, WI 53202</span>
      <!-- footer-address -->

      <a id='footer-phone' href='tel:+14142737400'>(414) 273-7400</a><!-- footer-phone -->

    </div><!-- footer-contact -->

    <div id='copyright'>

      <ul>
        <li>&copy; <?php echo date('Y'); ?> Mingo & Yankala, S.C. All Rights Reserved.</li>
        <li><a href=''>Privacy Policy</a></li>
        <li><a href=''>Disclaimer</a></li>
      </ul><!-- copyright -->

      <a id='ilawermarketing' href='//ilawyermarketing.com' target='_blank' rel='noopener'>
        <img src='<?php bloginfo('template_directory');?>/images/ilawyer.svg' alt='' />
      </a><!-- ilawermarketing -->

    </div><!-- copyright -->

  </div><!-- footer-inner -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

</body>

</html>