<?php

/* Template Name: Case Results */

get_header();?>

<div id="internal-main">

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='single-col'>

    <?php get_template_part('page-templates/includes/template', 'mtscroll');?>

    <?php if (!get_field('banner_h1') == "Yes"): ?>

    <h1 id='page-title' class='page-title-large page-title-center'><?php the_title();?></h1><!-- page-title -->

    <?php endif;?>

    <div id='case-results-wrapper' class='single-col-wrapper'>

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-01.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-02.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

      <div class='single-case-result'>

        <div class='single-case-result-reg'>

          <img class='single-case-result-icon' src='<?php bloginfo('template_directory');?>/images/ico-03.svg' alt='' />

          <span class='single-case-result-title'>$150,000</span><!-- single-case-result-title -->

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

        </div><!-- single-case-result-reg -->

        <div class='single-case-result-hover'>

          <span class='single-case-result-type'>BoAT ACCIDENT</span><!-- single-case-result-type -->

          <div class='single-case-result-description'>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis lectus, dignissim vel tellus eu,
              malesuada faucibus massa. Nam venenatis lacus ac eleifend lacinia. Orci varius natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Aliquam in sem venenatis, rutrum dui at, commodo metus.
              Aliquam pellentesque enim urna, id laoreet justo viverra vitae. Proin eleifend tortor consequat elementum
              mattis. Sed blandit lacus a consequat iaculis. Interdum et malesuada fames ac ante ipsum primis in
              faucibus. Mauris ut purus sit amet tellus sollicitudin auctor. Orci varius natoque penatibus et magnis dis
              parturient montes, nascetur ridiculus mus. Mauris tempus elementum neque ac imperdiet. Nullam porttitor
              aliquet faucibus. Integer scelerisque dapibus risus. </p>

            <p>Donec malesuada varius dui, id pretium augue suscipit et. Morbi eget lectus tempor, condimentum enim ac,
              tristique augue. Vestibulum quis sem vehicula, fermentum lorem nec, tincidunt felis. Nam commodo cursus
              lacus, nec lacinia enim. Aliquam enim justo, viverra sit amet laoreet eget, hendrerit id dui. Curabitur ex
              nisl, vehicula id facilisis sit amet, tincidunt ac velit. Etiam tellus massa, faucibus eu consequat vel,
              auctor ac nibh. Integer aliquam varius dui sit amet porttitor. Aliquam et posuere lorem, id tristique
              nulla. Pellentesque ultricies ipsum ut diam pharetra dapibus. In maximus vulputate vulputate. Duis
              hendrerit, neque in varius hendrerit, justo eros eleifend quam, nec faucibus tortor enim sollicitudin est.
              Nulla bibendum eget est non molestie. Phasellus sed orci auctor, sollicitudin libero vitae, pulvinar mi.
              Donec ultrices ipsum nec urna ullamcorper, et tincidunt augue consectetur. Vivamus fringilla varius
              convallis. Suspendisse mi sem, auctor eu tortor et, aliquam malesuada diam. Pellentesque eget sodales
              diam. Praesent erat augue, tincidunt ut auctor quis, efficitur in ex. In eu semper tellus. Fusce maximus
              diam sit amet facilisis luctus. Suspendisse et tellus ex. Morbi tempus varius feugiat. Mauris iaculis
              purus quam, sed imperdiet nunc aliquam a. Aliquam ultrices magna quis nisl dictum, in laoreet tortor
              iaculis. </p>

            <p>Mauris magna est, dictum eu metus ut, tincidunt sodales sem. Cras sagittis tincidunt mi, non aliquet
              ligula pulvinar in. Sed lobortis velit vestibulum, condimentum justo ultrices, volutpat mi. Etiam commodo
              libero in dui malesuada pellentesque. In porta orci dapibus mauris tempor, sed elementum orci euismod.
              Nunc id tincidunt quam, rhoncus blandit metus. Mauris eu urna ut orci sollicitudin gravida. Class aptent
              taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce maximus augue
              vehicula, auctor enim quis, dapibus dui. Nunc vitae scelerisque tellus. Pellentesque in tortor neque.
              Maecenas tincidunt volutpat urna. Morbi non urna ipsum. Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Etiam id consequat sem. Sed volutpat pretium lorem, congue
              mollis orci accumsan ut. Fusce sed porta orci. Curabitur sed maximus arcu. Praesent interdum enim et
              libero tincidunt blandit. Nullam malesuada purus malesuada consequat lacinia. Quisque ultricies
              pellentesque turpis, id tempor velit fringilla ut.</p>

          </div><!-- single-case-result-description -->

        </div><!-- single-case-result-hover -->

      </div><!-- single-case-result -->

    </div><!-- case-results-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>