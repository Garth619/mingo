<footer id="consultation">

  <div id='footer-bg-wrapper'>

    <picture>

      <?php $footer_background_desktop = get_field('footer_background_desktop', 'option');?>
      <?php if ($footer_background_desktop) {?>

      <source media='(min-width: 1170px)' data-srcset='<?php echo $footer_background_desktop['url']; ?>'>
      <?php }?>

      <img id='footer-bg' class='lazyload'
        data-src='<?php bloginfo('template_directory');?>/images/mobile-placeholder.png' alt='' />

    </picture>

  </div><!-- footer-bg-wrapper -->

  <div id='footer-inner'>

    <div id='footer-form'>

      <span id='footer-form-title'><?php the_field('footer_form_title', 'option');?></span><!-- footer-form-title -->

      <?php gravity_form(1, false, false, false, '', true, 1233);?>

    </div><!-- footer-form -->

    <div id='footer-contact'>

      <a id='footer-address' href='<?php the_field('google_address_link', 'option');?>' target='_blank'
        rel='noopener'><?php the_field('address', 'option');?></a>
      <!-- footer-address -->

      <a id='footer-phone'
        href='tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>'><?php the_field('footer_phone', 'option');?></a>
      <!-- footer-phone -->

    </div><!-- footer-contact -->

    <div id='copyright'>

      <ul>
        <li>&copy; <?php echo date('Y'); ?> <?php the_field('copyright', 'option');?></li>
        <li><a
            href='<?php the_field('privacy_policy_link', 'option');?>'><?php the_field('privacy_policy', 'option');?></a>
        </li>
        <li><a href='<?php the_field('disclaimer_link', 'option');?>'><?php the_field('disclaimer', 'option');?></a>
        </li>
      </ul><!-- copyright -->

      <a id='ilawermarketing' href='//ilawyermarketing.com' target='_blank' rel='noopener'>
        <img class='lazyload' data-src='<?php bloginfo('template_directory');?>/images/ilawyer.svg' alt='' />
      </a><!-- ilawermarketing -->

    </div><!-- copyright -->

  </div><!-- footer-inner -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

</body>

</html>