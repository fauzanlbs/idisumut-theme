<?php
get_header();
    while(have_posts()) {
        the_post(); ?>
           <!-- BEGIN HERO WITH PARALLAX -->
   
    <!-- END HERO WITH PARALLAX -->
    <!-- BEGIN PORTFOLIO SECTION -->
    <section class="p-b-40 p-t-40">
      <div class="container">
        <div class="m-b-30 font-montserrat">
          <h1 class="text-center "></h1>
          <div class="b-b b-grey m-t-30"></div>
           <?php the_content(); ?>
        </div>
      </div>
    
<?php }
get_footer();
?>