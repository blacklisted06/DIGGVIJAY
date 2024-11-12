<?php

function seopress_theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'seopress_theme_slug_setup');

function theme_name_enqueue_styles()
{

    wp_register_style('bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-min');

    wp_register_style('googleapis', 'https://fonts.googleapis.com', array(), '1.0', 'all');
    wp_enqueue_style('googleapis');

    wp_register_style('gstatic', 'https://fonts.gstatic.com', array(), '1.0', 'all');
    wp_enqueue_style('gstatic');

    wp_register_style('fontfamily', '"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swa', array(), '1.0', 'all');
    wp_enqueue_style('fontfamily');

    wp_register_style('font-awesome', '"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('fontfamily');

    wp_register_style('swiper-bundle', '"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style('swiper-bundle');

    wp_register_style('owl-carousel', '"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-carousel1', '"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-carousel1');

}
add_action('wp_enqueue_scripts', 'theme_name_enqueue_styles');


function add_custom_css_directly()
{
    $template_directory_uri = get_template_directory_uri();

    // Get the file modification time to use as a version
    $custom_style_version = filemtime(get_template_directory() . '/assets/css/style.css');

    echo '<link rel="stylesheet" type="text/css" href="' . $template_directory_uri . '/assets/css/style.css?v=' . $custom_style_version . '">';
}
add_action('wp_head', 'add_custom_css_directly');

function enqueue_slick_carousel_script()
{
    wp_localize_script('custom-ajax-script', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));

    $version = rand(5, 15); // Change this version number when you update your scripts

    echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
    echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>';
    echo '<script type="text/javascript" src="' . get_template_directory_uri() . '/assets/js/custom-js.js?ver=' . $version . '"></script>';


}
add_action('wp_footer', 'enqueue_slick_carousel_script');

// Register Nav bar
function add_nav_menus()
{
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ));
}
add_action('init', 'add_nav_menus');

// Add class menu LI

add_filter('nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4);

function so_37823371_menu_item_class($classes, $item, $args, $depth)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_class_link', 10, 2);
function add_class_link($classes, $item)
{

    // Add class
    $classes['class'] = 'nav-link';

    // Add class 'active' if the page is currently active
    if (in_array('current_page_item', $item->classes)) {
        $classes['class'] = 'nav-link active';
    }

    return $classes;
}

