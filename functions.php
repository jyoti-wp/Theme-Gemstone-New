<?php

/**
 * Functions.
 *
 * @package Gemstone
 */

// Constants
if (!defined('GEMSTONE_BUILD_URI')) {
    define('GEMSTONE_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/css');
}

function gemstone_files()
{
    wp_enqueue_script('main-gemstone-js', GEMSTONE_BUILD_URI . '/js/main.js', ['jquery'], '1.0', true);
    wp_enqueue_style('gemstone_main_style', get_stylesheet_uri());
    wp_enqueue_style('main-css', GEMSTONE_BUILD_URI . '/main.css', false, '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'gemstone_files');

// google font 
function add_fontawesome()
{
    wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false);
}


add_action('wp_enqueue_scripts', 'add_fontawesome');

function add_google_fonts()
{
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
}

function gemstone_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gemstone_features');
