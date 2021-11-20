<?php get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='two-col'>

    <div id='page-content'>

      <div id='page-content-inner' class='content'>

        <h1 id='page-title'><?php the_title();?></h1><!-- page-header -->

        <h2>Lorem ipsum dolor sit amet, dignissim vel tellus eu</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
          malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis dis
          parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus. </p>

        <p>Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
          mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis parturient
          montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor aliquet faucibus.
        </p>

        <h3>Heading Style 3 - lore spun</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
          malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis dis
        </p>

        <ul>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
        </ul>

        <p>
          parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus. Aliquam
          pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum mattis.</p>
        <ol>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
          <li>Aliquam pellentesque enim urna, id laoreet justo viverra vitae.</li>
        </ol>
        <p> Sed
          blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris ut
          purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis parturient montes,
          nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor aliquet faucibus.</p>

        <?php the_content();?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>