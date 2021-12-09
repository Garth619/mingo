<section id='section-eight'>

  <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

  <div id='sec-eight-inner'>

    <?php $auth = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

    <ul>
      <?php if (have_rows('section_eight_practice_areas')): ?>
      <?php while (have_rows('section_eight_practice_areas')): the_row();?>

      <li>
        <a href='<?php the_sub_field('link');?>'>
          <span> <?php the_sub_field('title');?></span>
          <div class='arrow-wrapper'>
            <?php echo file_get_contents(get_template_directory() . '/images/ico-arrow.svg', false, $auth); ?>
          </div><!-- arrow-wrapper -->
        </a>
      </li>

      <?php endwhile;?>

      <?php endif;?>

    </ul>

  </div><!-- sec-eight-inner -->

</section><!-- section-eight -->