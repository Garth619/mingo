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

      <a id='footer-address'
        href='https://www.google.com/maps/place/330+E+Kilbourn+Ave+Suite+1221,+Milwaukee,+WI+53202/@43.0431442,-87.9096948,17z/data=!3m1!4b1!4m5!3m4!1s0x880519093e955555:0x9ffdbf0039ad4a72!8m2!3d43.0431442!4d-87.9075061'
        target='_blank' rel='noopener'>330 East Kilbourn Ave<br> Suite 1221<br> Milwaukee,
        WI 53202</a>
      <!-- footer-address -->

      <a id='footer-phone' href='tel:+14142737400'>(414) 273-7400</a><!-- footer-phone -->

    </div><!-- footer-contact -->

    <div id='copyright'>

      <ul>
        <li>&copy; <?php echo date('Y'); ?> Mingo & Yankala, S.C. All Rights Reserved.</li>
        <li><a href='<?php bloginfo('url');?>/privacy-policy'>Privacy Policy</a></li>
        <li><a href='<?php bloginfo('url');?>/disclaimer'>Disclaimer</a></li>
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