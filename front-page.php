<?php get_header(); ?>

<div class="page-wrappers">
    <!-- BEGIN JUMBOTRON -->
    <?php echo do_shortcode( '[the-post-grid id="122" title="Main grid"]' ); ?>
    <!-- END JUMBOTRON -->
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85">
        <div class="container" style="padding:30px">
            <!-- <div class=""> -->
            <h4 class="text-center font-montserrat" style="margin:20px;">Berita Terbaru</h4>

            
            <?php echo do_shortcode( '[the-post-grid id="52" title="Berita"]' ); ?>
            
        </div>
</div>

<div class="container">
    <div class="md-p-l-20 md-p-r-20 xs-no-padding">
    <h4 class="text-center font-montserrat" style="margin:20px;">Event Terbaru</h4>

        <!-- BEGIN EVENT SECTION -->
        <section class="p-b-85 p-t-75 p-b-65 p-t-55">
            <div class="container">
                <div class="md-p-l-20 xs-no-padding clearfix">
                <?php echo do_shortcode( '[the-post-grid id="141" title="Event"]' ); ?>
                


                </div>
            </div>
        </section>
        <!-- END EVENT SECTION -->
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

<!-- END CONTENT SECTION -->


<?php
get_footer();
?>