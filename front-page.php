<?php get_header(); ?>

<div class="page-wrappers">
    <!-- BEGIN JUMBOTRON -->
    <section class="jumbotron full-vh" data-pages="parallax">
        <div class="inner full-height">
            <!-- BEGIN SLIDER -->
            <div class="swiper-container" id="hero">
                <div class="swiper-wrapper">
                    <!-- BEGIN SLIDE -->
                    <div class="swiper-slide fit">
                        <!-- BEGIN IMAGE PARRALAX -->
                        <div class="slider-wrapper">
                            <div class="background-wrapper" data-swiper-parallax="30%">
                                <!-- YOUR BACKGROUND IMAGE HERE, YOU CAN ALSO USE IMG with the same classes -->
                                <div class="background"
                                    style="background-image: url(<?php echo get_theme_file_uri('assets/images/doctor-bg3.jpg') ?>);height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                        <!-- END IMAGE PARRALAX -->
                        <!-- BEGIN CONTENT -->
                        <div class="content-layer">
                            <div class="inner full-height">
                                <div class="container-xs-height full-height">
                                    <div class="col-xs-height col-middle text-left">
                                        <div class="container">
                                            <div class="col-md-6 no-padding col-xs-10 col-xs-offset-1">
                                                <h1 class="sm-text-center" data-swiper-parallax="-15%"> IDISUMUT</h1>
                                                <h5 class="block-title sm-text-center">Labore magna do eiusmod culpa
                                                    veniam deserunt ipsum ad.</h5>
                                                <!-- <h5 class="block-title text-white sm-text-center">Officia reprehenderit sunt veniam quis est reprehenderit sunt id velit culpa in</h5>
                            <p class="fs-12 font-arial hint-text sm-text-center">ut exercitation sunt. Et aute minim voluptate tempor fugiat. Amet id tempor adipisicing aliquip do amet esse elit.</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SLIDE -->
                    <!-- BEGIN SLIDE -->
                    <div class="swiper-slide fit">
                        <!-- BEGIN IMAGE PARRALAX -->
                        <div class="slider-wrapper">
                            <div class="background-wrapper" data-swiper-parallax="30%">
                                <!-- YOUR BACKGROUND IMAGE HERE, YOU CAN ALSO USE IMG with the same classes -->
                                <div data-pages-bg-image="assets/images/hero_2.jpeg" draggable="false"
                                    class="background"></div>
                            </div>
                        </div>
                        <!-- END IMAGE PARRALAX -->
                        <!-- BEGIN CONTENT -->
                        <div class="content-layer">
                            <div class="inner full-height">
                                <div class="container-xs-height full-height">
                                    <div class="col-xs-height col-middle text-left">
                                        <div class="container">
                                            <div class="col-md-6 no-padding col-xs-10 col-xs-offset-1">
                                                <!-- <h1 class="light sm-text-center" data-swiper-parallax="-15%"> Magna ex deserunt do est nulla sit Lorem commodo non aliquip dolore. </h1>
                            <h4 class="sm-text-center">Incididunt aliqua et velit reprehenderit non.</h4>
                            <h5 class="block-title text-white sm-text-center">Fugiat nulla est aliqua ex voluptate ex exercitation consectetur proident commodo do.</h5>
                            <p class="fs-12 font-arial hint-text sm-text-center">Incididunt aliqua et velit reprehenderit non.</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SLIDE -->
                    <!-- BEGIN SLIDE -->
                    <div class="swiper-slide fit">
                        <!-- BEGIN IMAGE PARRALAX -->
                        <div class="slider-wrapper">
                            <div class="background-wrapper" data-swiper-parallax="30%">
                                <div data-pages-bg-image="assets/images/hero_5.jpeg" draggable="false"
                                    class="background"></div>
                            </div>
                        </div>
                        <!-- END IMAGE PARRALAX -->
                        <!-- BEGIN CONTENT -->
                        <div class="content-layer">
                            <div class="inner full-height">
                                <div class="container-xs-height full-height">
                                    <div class="col-xs-height col-middle text-left">
                                        <div class="container">
                                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                                <h1 class="light" data-swiper-parallax="-15%">Labore magna do eiusmod
                                                </h1>
                                                <p class="fs-12 font-arial hint-text">Culpa veniam deserunt ipsum ad.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SLIDE -->
                </div>
                <!-- BEGIN ANIMATED MOUSE -->
                <div class="mouse-wrapper">
                    <div class="mouse">
                        <div class="mouse-scroll"></div>
                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-navigation swiper-dark-solid swiper-button-prev auto-reveal"></div>
                <div class="swiper-navigation swiper-dark-solid swiper-button-next auto-reveal"></div>
            </div>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END JUMBOTRON -->
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85">
        <div class="container">
            <!-- <div class=""> -->
            <h3 class="text-center">Berita Terbaru</h3>


            <!-- BEGIN BERITA SECTION -->
            <section class="p-b-85 p-t-75 p-b-65 p-t-55">
                <div class="container">
                    <div class="md-p-l-20 xs-no-padding clearfix">
                        <?php
                        $homepageBerita = new WP_Query(
                            array(
                                'posts_per_page' => 6,
                                'post_type' => 'post'
                            )
                        );

                        while ($homepageBerita->have_posts()) {
                            $homepageBerita->the_post(); ?>
                            <div class="col-sm-4 no-padding">
                                <div class="p-r-40 md-pr-30">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <img width="300" height="225"
                                                src="https://thumbs.dreamstime.com/b/no-thumbnail-images-placeholder-forums-blogs-websites-148010338.jpg"
                                                class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                                loading="lazy"
                                                sizes="(max-width: 300px) 100vw, 300px"> </img> </a>
                                    <?php
                                    endif; ?>
                                    <h6 class="block-title p-b-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <p class="m-b-10"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                    <p class="muted font-arial small-text col-sm-9 no-padding"><a href="<?php the_permalink(); ?>">Selengkapnya</a></p>
                                </div>
                                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
                            </div>

                        <?php }
                        ?>

                        
                    </div>
                </div>
            </section>
            <!-- END BERITA SECTION -->


           
            <!-- <div class="row">
              <div class="col-sm-5 col-md-4">
                <h1 class="m-t-5">Incididunt aliqua et velit reprehenderit non.</h1>
              </div>
              <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                  <p>Minim magna est incididunt occaecat quis proident commodo dolor aute irure pariatur fugiat irure excepteur.</p>
                  <p class="hint-text font-arial small-text col-md-7 no-padding">Minim nulla occaecat duis ut exercitation sint.</p>
                </div>
              </div> -->
            <!-- </div> -->
        </div>
</div>

<div class="container">
    <div class="md-p-l-20 md-p-r-20 xs-no-padding">
        <h3 class="text-center">Event Terbaru</h3>

           <!-- BEGIN EVENT SECTION -->
           <section class="p-b-85 p-t-75 p-b-65 p-t-55">
                <div class="container">
                    <div class="md-p-l-20 xs-no-padding clearfix">
                        <?php
                        $homepageEvent = new WP_Query(
                            array(
                                'posts_per_page' => 6,
                                'post_type' => 'event'
                            )
                        );

                        while ($homepageEvent->have_posts()) {
                            $homepageEvent->the_post(); ?>
                            <div class="col-sm-4 no-padding">
                                <div class="p-r-40 md-pr-30">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <img width="300" height="225"
                                                src="https://thumbs.dreamstime.com/b/no-thumbnail-images-placeholder-forums-blogs-websites-148010338.jpg"
                                                class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                                loading="lazy"
                                                sizes="(max-width: 300px) 100vw, 300px"> </img> </a>
                                    <?php
                                    endif; ?>
                                    <h6 class="block-title p-b-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <p class="m-b-10"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                    <p class="muted font-arial small-text col-sm-9 no-padding"><a href="<?php the_permalink(); ?>">Selengkapnya</a></p>
                                </div>
                                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
                            </div>

                        <?php }
                        ?>

                        
                    </div>
                </div>
            </section>
            <!-- END EVENT SECTION -->
        <!-- <div class="row">
              <div class="col-sm-5 col-md-4">
                <h1 class="m-t-5">Incididunt aliqua et velit reprehenderit non.</h1>
              </div>
              <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                  <p>Minim magna est incididunt occaecat quis proident commodo dolor aute irure pariatur fugiat irure excepteur.</p>
                  <p class="hint-text font-arial small-text col-md-7 no-padding">Minim nulla occaecat duis ut exercitation sint.</p>
                </div>
              </div> -->
    </div>
</div>
</div>
</section>
<!-- END CONTENT SECTION -->
<!-- BEGIN CONTENT SECTION -->
<!-- <section class="p-b-85 p-t-75 p-b-65 p-t-55">
    <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">
            <div class="col-sm-4 no-padding">
                <div class="p-r-40 md-pr-30">
                    <img alt="" class="m-b-20" src="assets/images/Parachute.svg">
                    <h6 class="block-title p-b-5">Kegiatan <i class="pg-arrow_right m-l-10"></i></h6>
                    <p class="m-b-30">Fugiat quis magna nulla nulla qui veniam.</p>
                    <p class="muted font-arial small-text col-sm-9 no-padding">Est velit excepteur ullamco adipisicing
                        eiusmod duis aliquip magna sint incididunt.</p>
                </div>
                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="p-r-40 md-pr-30">
                    <img alt="" class="m-b-20" src="assets/images/Prizemedalion.svg">
                    <h6 class="block-title p-b-5">Agenda <i class="pg-arrow_right m-l-10"></i></h6>
                    <p class="m-b-30">Eiusmod veniam ullamco nulla ea dolore nulla aliquip non deserunt.</p>
                    <p class="muted font-arial small-text col-sm-9 no-padding">Officia exercitation consectetur deserunt
                        nulla sit aliquip exercitation commodo eu et commodo labore sunt.</p>
                </div>
                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="p-r-40 md-pr-30">
                    <img alt="" class="m-b-20" src="assets/images/Umbrella.svg">
                    <h6 class="block-title p-b-5">Kontak <i class="pg-arrow_right m-l-10"></i></h6>
                    <p class="m-b-30">Ipsum velit officia amet laboris duis dolor sunt incididunt elit aliqua et
                        exercitation.</p>
                    <p class="muted font-arial small-text col-sm-9 no-padding">Nulla deserunt adipisicing est dolore
                        nulla esse ea enim cillum tempor elit pariatur laborum irure.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END CONTENT SECTION -->
<!-- BEGIN CONTENT SECTION -->
<!-- <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
        <div class="container">
          <div class="md-p-l-20 md-p-r-20 xs-no-padding">
            <h5 class="block-title hint-text no-margin">Gallery</h5>
            <div class="row">
              <div class="col-sm-5">
                <h1 class="m-t-5 m-b-20">Sint do consectetur eiusmod dolore minim excepteur anim amet laborum.</h1>
                <p class="m-b-20">Sint Lorem ea elit elit enim id.</p>
                <p class="hint-text font-arial small-text col-md-8 no-padding">Ipsum veniam ipsum consectetur dolor exercitation dolore nisi consectetur.</p>
              </div>
              <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                <div class="content-mask-md">
                  <div class="device_morph pull-center-inner" id="iphone01" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="300" data-speed="-0.1" data-delay="1000" data-curve="ease">
                    <img alt="" class="xs-image-responsive-height image-responsive-width" src="assets/images/b_phone.png">
                    <div class="screen">
                      <div class="iphone-border">
                        <img src="assets/images/mobile_preview.jpg" class="image-responsive-height lazy" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
<!-- END CONTENT SECTION -->
<!-- BEGIN CONTENT SECTION -->
<section class="p-b-85 p-t-75 bg-master-lighter">
    <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">
            <div class="row visible-sm">
                <div class="col-sm-8 m-b-40">
                    <h2>Officia exercitation in eu est dolore.</h2>
                    <p class="hint-text font-arial small-text col-md-4 col-sm-6 no-padding">Laboris cillum nostrud duis
                        minim labore officia ut esse voluptate sint excepteur dolore.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="device_morph" data-pages="auto-scroll">
                        <img alt="" class="xs-image-responsive-height image-responsive-width"
                            src="assets/images/b_phone.png" id="mobile_phone">
                        <div class="screen">
                            <div class="iphone-border">
                                <img src="assets/images/mobile_preview.jpg" class="image-responsive-height lazy" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1  col-sm-offset-2 col-sm-6">

                    <!-- <div class="clearfix hidden-sm">
                  <h2>In aute ipsum veniam eiusmod qui laborum id reprehenderit quis velit.</h2>
                  <p class="hint-text font-arial small-text col-md-4 col-sm-6 no-padding">Consectetur enim in incididunt proident quis esse sit eiusmod pariatur nulla adipisicing aliqua.</p>
                </div>
                <div class="col-md-9 col-md-offset-1 col-sm-11">
                  <div class="p-t-50">
                    <dl>
                      <dt class="block-title p-b-15 text-black">Organisasi <i class="pg-arrow_right m-l-10"></i></dt>
                      <dd class="m-b-30">Id dolor incididunt sit culpa sunt dolore eu cupidatat anim deserunt.</dd>
                    </dl>
                    <dl>
                      <dt class="block-title p-b-15 text-black">Responsive <i class="pg-arrow_right m-l-10"></i></dt>
                      <dd class="m-b-30">Et commodo nulla dolore velit commodo est deserunt ea quis anim nisi tempor in sunt.</dd>
                    </dl>
                    <dl>
                      <dt class="block-title text-black p-b-15 ">Test123 <i class="pg-arrow_right m-l-10"></i></dt>
                      <dd class="m-b-30">Exercitation ut consequat veniam officia nulla reprehenderit elit fugiat enim.</dd>
                    </dl>
                  </div>
                </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTENT SECTION -->
<section class="p-b-85 p-t-75 ">
    <!-- BEGIN TESTIMONIALS SLIDER-->
    <div class="swiper-container" id="testimonials_slider">
        <div class="swiper-wrapper">
            <!-- BEGIN TESTIMONIAL -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3 class="text-center">
                            Proident reprehenderit excepteur enim voluptate id sit occaecat mollit est esse pariatur.
                            Sit occaecat magna ex aliquip adipisicing aute. Consectetur adipisicing esse eu
                            reprehenderit tempor excepteur anim fugiat esse quis consequat nulla.
                        </h3>
                        <img alt="" class="m-t-20" src="assets/images/signature_sample.png">
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
            <!-- BEGIN TESTIMONIAL -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3 class="text-center">
                            Magna irure quis reprehenderit nulla laborum elit. Cillum minim excepteur ipsum ipsum
                            cillum. Nostrud mollit dolore velit culpa ea sunt nulla duis. Eu ullamco amet cupidatat ad
                            quis officia excepteur laborum labore esse dolor occaecat ipsum voluptate.
                        </h3>
                        <img alt="" class="m-t-20" src="assets/images/signature_sample.png">
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
            <!-- BEGIN TESTIMONIAL -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3 class="text-center">
                            Aute aliquip labore et est irure ipsum sit excepteur. Officia anim anim et enim Lorem non
                            dolor. Exercitation fugiat voluptate duis dolor adipisicing culpa laboris culpa exercitation
                            ex exercitation et. Ipsum eu consequat exercitation irure ex qui pariatur voluptate
                            excepteur anim cupidatat anim.
                        </h3>
                        <img alt="" class="m-t-20" src="assets/images/signature_sample.png">
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
        </div>
        <!-- Add Navigation -->
        <div class="swiper-pagination relative p-t-20"></div>
    </div>
    <!-- END TESTIMONIALS -->
</section>

<?php
get_footer();
?>