<section id='section-eight'>

  <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

  <div id='sec-eight-inner'>

    <?php $auth = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

    <ul>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
      <li>
        <a href='<?php bloginfo('url');?>/milwaukee-personal-injury-attorneys'>
          <span>Practice Area Goes Here</span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>
    </ul>

  </div><!-- sec-eight-inner -->

</section><!-- section-eight -->