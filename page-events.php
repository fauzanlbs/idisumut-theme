<?php
get_header();
    while(have_posts()) {
        the_post(); ?>

          <!-- BEGIN HERO WITH PARALLAX -->
    <section class="demo-hero-5" data-pages="parallax" style="background-image: url(<?php echo get_theme_file_uri('assets/images/doctor-bg2.jpg') ?>);height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-center">
          <h1 style="font-size:50px" class="block-title text-black inner"><b>INI PAGE CUSTOM EVENT</b></h1>
        </div>
      </div>
    </section>
    <!-- END HERO WITH PARALLAX -->
    
     <!-- BEGIN EVENT SECTION -->
     <section class="p-b-85 p-t-75 p-b-65 p-t-55">
                <div class="container">
                    <div class="md-p-l-20 xs-no-padding clearfix">
                        <?php
                        $homepageEvent = new WP_Query(
                            array(
                                'posts_per_page' => 2,
                                'post_type' => 'event',
                                'paged' => get_query_var('paged', 1)
                            )
                        );

                        while ($homepageEvent->have_posts()) {
                            $homepageEvent->the_post(); ?>
                            <div class="col-sm-4 no-padding">
                                <div class="p-r-40 md-pr-30">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive--full img-rounded', 'title' => 'Feature image']); ?>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <img width="300" height="225"
                                                src="https://thumbs.dreamstime.com/b/no-thumbnail-images-placeholder-forums-blogs-websites-148010338.jpg"
                                                class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                                loading="lazy" sizes="(max-width: 300px) 100vw, 300px"> </img> </a>
                                    <?php
                                    endif; ?>
                                    <h6 class="block-title p-b-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <p class="m-b-10">
                                        <?php echo wp_trim_words(get_the_content(), 18); ?>
                                    </p>
                                    <p class="muted font-arial small-text col-sm-9 no-padding"><a
                                            href="<?php the_permalink(); ?>">Selengkapnya</a></p>
                                </div>
                                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
                            </div>

                        <?php }
                        ?>


                    </div>
                    <?php 
                        echo paginate_links(array(
                            'total' => $homepageEvent->max_num_pages
                        ));
                        ?>
                </div>
            </section>
            <!-- END EVENT SECTION -->

      </div>
       
<?php }

get_footer();
?>