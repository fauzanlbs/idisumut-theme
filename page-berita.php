<?php
get_header();
while (have_posts()) {
    the_post(); ?>

    <!-- BEGIN HERO WITH PARALLAX -->
    <!-- <section class="demo-hero-5" data-pages="parallax"
        style="background-image: url(<?php echo get_theme_file_uri('assets/images/doctor-bg2.jpg') ?>);height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container-xs-height full-height">
            <div class="col-xs-height col-middle text-center">
                <h1 style="font-size:50px" class="block-title text-black inner"><b>BERITA</b></h1>
            </div>
        </div>
    </section> -->
    <!-- END HERO WITH PARALLAX -->

    <div class="container">
        <!-- <div class=""> -->
        <!-- <h3 class="text-center">Berita Terbaru</h3> -->

        <!-- BEGIN BERITA SECTION -->
        <section class="p-b-85 p-t-75 p-b-65 p-t-55">
            <div class="container" style="padding:30px">
                <div class="md-p-l-20 xs-no-padding clearfix">
                <?php echo do_shortcode( '[the-post-grid id="142" title="Berita page"]' ); ?>
            </div>
        </section>
        <!-- END BERITA SECTION -->
    </div>

<?php }

get_footer();
?>