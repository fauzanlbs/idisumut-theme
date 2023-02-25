<?php
get_header();
    while(have_posts()) {
        the_post(); ?>
           <!-- BEGIN HERO WITH PARALLAX -->
    <section class="demo-hero-5" data-pages="parallax" style="background-image: url(<?php echo get_theme_file_uri('assets/images/doctor-bg2.jpg') ?>);height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-center">
          <h1 style="font-size:50px" class="block-title text-black inner"><b><?php the_title(); ?></b></h1>
        </div>
      </div>
    </section>
    <!-- END HERO WITH PARALLAX -->
    <!-- BEGIN PORTFOLIO SECTION -->
    <section class="p-b-40 p-t-40">
      <div class="container">
        <div class="m-b-30">
          <h1 class="text-center "></h1>
          <div class="b-b b-grey m-t-30"></div>
            <?php the_content(); ?>
        </div>
      </div>
    
<?php }
get_footer();
?>