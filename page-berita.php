<?php
get_header();
    while(have_posts()) {
        the_post(); ?>

          <!-- BEGIN HERO WITH PARALLAX -->
    <section class="demo-hero-5" data-pages="parallax" style="background-image: url(<?php echo get_theme_file_uri('assets/images/doctor-bg2.jpg') ?>);height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-center">
          <h1 style="font-size:50px" class="block-title text-black inner"><b>INI PAGE CUSTOM BERITA</b></h1>
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
          <?php
                $homepageBerita = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'post',
                    'paged' => get_query_var('paged', 1)
                ));

                while($homepageBerita->have_posts()) {
                    $homepageBerita->the_post(); ?>
                <section class="row">

                                <div class="row">
                                    <h6 class="block-title p-b-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </i></h6>
                                    <p class="m-b-30"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                    <p class="muted font-arial small-text col-sm-9 no-padding"> <a href="<?php the_permalink(); ?>">Selengkapnya</a></p>
                                </div>

                    
                </section>
                <?php }
                 echo paginate_links(array(
                    'total' => $homepageBerita->max_num_pages
                ));
            ?>
        </div>
      </div>
       
<?php }

get_footer();
?>