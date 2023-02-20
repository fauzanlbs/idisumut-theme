<?php

function idisumut_files() {
    wp_enqueue_script('pace-script',get_theme_file_uri('/assets/plugins/pace/pace.min.js'), NULL);
    wp_enqueue_script('loader-script',get_theme_file_uri('/pages/js/pages.image.loader.js'), NULL);
    wp_enqueue_script('main-script',get_theme_file_uri('/assets/plugins/jquery/jquery-1.11.1.min.js'), NULL);
    wp_enqueue_script('custom-script',get_theme_file_uri('/assets/js/custom.js'), NULL);
    wp_enqueue_script('bootstrap-script',get_theme_file_uri('/assets/plugins/bootstrap/js/bootstrap.min.js'), NULL);
    wp_enqueue_script('swiper-script',get_theme_file_uri('/assets/plugins/swiper/js/swiper.jquery.min.js'), NULL);
    wp_enqueue_script('velocity-script',get_theme_file_uri('/assets/plugins/velocity/velocity.min.js'), NULL);
    wp_enqueue_script('swiper-script',get_theme_file_uri('/assets/plugins/swiper/js/swiper.jquery.min.js'), NULL);
    wp_enqueue_script('velocity-script',get_theme_file_uri('/assets/plugins/velocity/velocity.ui.js'), NULL);
    wp_enqueue_script('unveil-script',get_theme_file_uri('/assets/plugins/jquery-unveil/jquery.unveil.min.js'), NULL);
    wp_enqueue_script('pages-script',get_theme_file_uri('/pages/js/pages.frontend.js'), NULL);
    

    wp_enqueue_style('main-stylesheet', get_theme_file_uri('/pages/css/pages.css'));
    wp_enqueue_style('main-icon', get_theme_file_uri('/pages/css/pages-icons.css'));
    wp_enqueue_style('main-pace', get_theme_file_uri('/assets/plugins/pace/pace-theme-flash.css'));
    wp_enqueue_style('main-bootstrap', get_theme_file_uri('/assets/plugins/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('main-fontawesome', get_theme_file_uri('/assets/plugins/font-awesome/css/font-awesome.css'));
    wp_enqueue_style('main-swiper', get_theme_file_uri('/assets/plugins/swiper/css/swiper.css'));
}

add_action('wp_enqueue_scripts', 'idisumut_files');