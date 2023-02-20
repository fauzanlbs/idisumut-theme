<?php

function idisumut_files() {
    wp_enqueue_style('main-stylesheet', get_theme_file_uri('/pages/css/pages.css'));
    wp_enqueue_style('main-icon', get_theme_file_uri('/pages/css/pages-icons.css'));
    wp_enqueue_style('main-pace', get_theme_file_uri('/assets/plugins/pace/pace-theme-flash.css'));
    wp_enqueue_style('main-bootstrap', get_theme_file_uri('/assets/plugins/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('main-fontawesome', get_theme_file_uri('/assets/plugins/font-awesome/css/font-awesome.css'));
    wp_enqueue_style('main-swiper', get_theme_file_uri('/assets/plugins/swiper/css/swiper.css'));
}

add_action('wp_enqueue_scripts', 'idisumut_files');