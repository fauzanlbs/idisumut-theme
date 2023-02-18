<?php

function idisumut_files() {
    wp_enqueue_style('idisumut_main_styles', get_theme_file_uri('/pages/css/pages.css'));
}

add_action('wp_enqueue_scripts', 'idisumut_files');