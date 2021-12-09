<section id='section-six'>

  <div id='sec-six-top'>

    <span id='sec-six-title'><?php the_field('section_six_title');?></span><!-- sec-six-title -->

    <?php if (get_field('section_six_button_link')) {?>

    <a class='button-two sec-six-button-two'
      href='<?php the_field('section_six_button_link');?>'><?php the_field('section_six_button_verbiage');?> </a>

    <?php }?>

  </div><!-- sec-six-top -->

  <div id='sec-six-content'>

    <div class='sec-six-col'>

      <?php if (have_rows('section_six_selling_points_column_one')): ?>
      <?php while (have_rows('section_six_selling_points_column_one')): the_row();?>

      <div class='sec-six-sp'>

        <span class='sec-six-sp-number'><?php the_sub_field('number');?></span><!-- sec-six-sp-number -->

        <div class='sec-six-sp-content'>

          <span class='sec-six-sp-title'><?php the_sub_field('top_content');?></span><!-- sec-six-sp-title -->

          <span class='sec-six-sp-descrip'><?php the_sub_field('bottom_content');?></span><!-- sec-six-sp-descrip -->

          <?php if (get_sub_field('button_link')) {?>

          <a class='button-one sec-six-sp-button-one' href='<?php the_sub_field('button_link');?>'>
            <?php the_sub_field('button');?></a>

          <?php }?>

        </div><!-- sec-six-sp-content -->

      </div><!-- sec-six-sp -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- sec-six-col -->

    <div class='sec-six-col'>

      <?php if (have_rows('section_six_selling_points_column_two')): ?>
      <?php while (have_rows('section_six_selling_points_column_two')): the_row();?>

      <div class='sec-six-sp'>

        <span class='sec-six-sp-number'><?php the_sub_field('number');?></span><!-- sec-six-sp-number -->

        <div class='sec-six-sp-content'>

          <span class='sec-six-sp-title'><?php the_sub_field('top_content');?></span><!-- sec-six-sp-title -->

          <span class='sec-six-sp-descrip'><?php the_sub_field('bottom_content');?></span><!-- sec-six-sp-descrip -->

          <?php if (get_sub_field('button_link')) {?>

          <a class='button-one sec-six-sp-button-one' href='<?php the_sub_field('button_link');?>'>
            <?php the_sub_field('button');?></a>

          <?php }?>

        </div><!-- sec-six-sp-content -->

      </div><!-- sec-six-sp -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- sec-six-col -->

  </div><!-- sec-six-content -->

</section><!-- section-six -->