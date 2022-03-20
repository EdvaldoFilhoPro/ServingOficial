<?php

function load_scripts(){

    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/plugins/themify-icons/themify-icons.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/plugins/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/plugins/slick/slick-theme.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/plugins/fancybox/jquery.fancybox.min.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/plugins/aos/aos.css');
    wp_enqueue_style('slyle', get_template_directory_uri() . '/assets/css/style.css');
    // wp_enqueue_style('', get_template_directory_uri() . '/assets/');

    wp_register_script('jquery-tow', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    // wp_enqueue_script('query', get_template_directory_uri(). '/assets/plugins/jquery/jquery.min.js' );
    wp_enqueue_script('bootstrap-min', get_template_directory_uri(). '/assets/plugins/bootstrap/bootstrap.min.js', array(), '3.5.1', true );
    wp_enqueue_script('slick-min', get_template_directory_uri(). '/assets/plugins/slick/slick.min.js', array(), '3.5.1', true );
    wp_enqueue_script('query-fancybox-min', get_template_directory_uri(). '/assets/plugins/fancybox/jquery.fancybox.min.js', array(), '3.5.1', true );
    wp_enqueue_script('jquery-syotimer-min.', get_template_directory_uri(). '/assets/plugins/syotimer/jquery.syotimer.min.js', array(), '3.5.1', true );
    wp_enqueue_script('aos', get_template_directory_uri(). '/assets/plugins/aos/aos.js', array(), '3.5.1', true );
    wp_enqueue_script('googleapis-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g' );
    wp_enqueue_script('gmap', get_template_directory_uri(). '/assets/plugins/google-map/gmap.js', array(), '3.5.1', true );
    wp_enqueue_script('main-script', get_template_directory_uri(). '/assets/js/script.js', array(), '3.5.1', true );
    // wp_enqueue_script('', get_template_directory_uri(). '/assets/' );
    // wp_enqueue_script('', get_template_directory_uri(). '/assets/' );
    


}
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');