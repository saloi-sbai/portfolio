<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'montheme_supports');


if (!function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => "menu principal",
            'footer_menu'  => "Footer Menu",
        ));
        add_theme_support('custom-logo');
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}
