<?php 

/**
 * Theme functions
 * 
 * @package Jackjone
 */

//  echo "<pre>";
//  print_r(get_template_directory_uri());
//  wp_die();

function jackjone_enqueue_scripts(){

    $version = wp_get_theme()->get('Version');

    wp_register_style('template-css', get_stylesheet_uri(), [], $version, 'all');
    wp_register_style('main-css', get_template_directory_uri()."/assets/css/style.css", [], $version, "all");
    wp_register_script('main-js', get_template_directory_uri().'/assets/js/main.js', [], $version, true);


    wp_enqueue_style('template-css');
    wp_enqueue_style('main-css');
    wp_enqueue_script('main-js');

}

add_action('wp_enqueue_scripts','jackjone_enqueue_scripts');


?>