<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-18
*/

// Activate menu
add_action("init", "register_my_menu");

function register_my_menu()
{
    register_nav_menu("main-nav", __("Huvudmeny"));
}

// Activate support for dynamic logotype
add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    );

    add_theme_support('custom-logo', $defaults);
}

// Activate support for dynamic header image
$args = array(
    'default-image' => get_template_directory_uri() . 'images/header.jpg',
    'uploads' => true
);

add_theme_support("custom-header", $args);

// Activate support for dynamic post thumbnails
add_theme_support('post-thumbnails');

// Activate support for dynamic widget areas
add_action('widgets_init', 'annaboda_widget_init');

function annaboda_widget_init()
{
    register_sidebar(array(
        'name' => "Widget startsida",
        'id' => "widget-frontpage",
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

// Change length for excerpts
function mytheme_custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

// Inclusion of fontawesome script for icons
add_action('wp_head', 'fontawesome_assets');

function fontawesome_assets()
{
?>
    <script src="https://kit.fontawesome.com/43f95b5672.js" crossorigin="anonymous"></script>
<?php
}

// Inclusion of CSS file and JavaScript file
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', null, null, true);
?>