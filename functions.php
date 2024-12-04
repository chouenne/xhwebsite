<?php
// Enqueue Main Styles and js file
function xhwebdesign_files()
{
  // Enqueue style.css from the root of the theme directory
  wp_enqueue_style('xhwebdesign_main_style', get_stylesheet_uri());

  // Enqueue script.js from the js folder
  wp_enqueue_script('xhwebdesign_script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'xhwebdesign_files');


// Add theme support for custom logo
add_theme_support('custom-logo');

// Load the theme text domain for translations
add_action('after_setup_theme', 'mytheme_setup');
function mytheme_setup()
{
  load_theme_textdomain('mytheme', get_template_directory() . '/languages'); // Adjust 'mytheme' to your theme's text domain
}


// Register Navigation Menus
function my_menus()
{
  register_nav_menus(
    array(
      'headernav' => __('Header Nav Menu'),
      'footernav' => __('Footer Nav Menu')
    )
  );

  // Register Widget Areas
  register_sidebar(array(
    'name' => __('Header Widget Area', 'xhwebdesign'),
    'id' => 'header-widget-area',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => __('Footer Widget Area', 'xhwebdesign'),
    'id' => 'footer-widget',
    'before_widget' => '<div class="widget-footer">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}

add_action('init', 'my_menus');

// Register Custom Post Type
function xhwebdesign_post_types()
{
  register_post_type(
    'project',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'projects'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project'
      )
    )
  );

  register_post_type(
    'service',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'services'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Service',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Service',
        'all_items' => 'All Services',
        'singular_name' => 'Service'
      )
    )
  );

  register_post_type(
    'testimonial',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'testimonials'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Testimonials',
        'add_new_item' => 'Add New Testimonial',
        'edit-item' => 'Edit Testimonial',
        'all_items' => 'All Testimonials',
        'singular_name' => 'Testimonial'
      )
    )
  );
}

add_action('init', 'xhwebdesign_post_types');

function enqueue_slick_slider()
{
  // Enqueue Slick Slider CSS
  wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], '1.8.1');
  wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', [], '1.8.1');

  // Enqueue Slick Slider JS
  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.8.1', true);

  // Custom JS to initialize Slick
  wp_enqueue_script('slick-init-js', get_template_directory_uri() . '/js/slick-init.js', array('jquery', 'slick-js'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');

//back tp top button
function enqueue_back_to_top_script()
{
  wp_enqueue_script(
    'back-to-top',
    get_template_directory_uri() . '/js/back-to-top.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_back_to_top_script');


function enqueue_scripts()
{
  // Enqueue your JavaScript file
  wp_enqueue_script('your-script-handle', get_template_directory_uri() . '/js/script.js', array(), null, true);

  // Get the menu items for left and right menus
  $left_menu_items = wp_nav_menu(array(
    'theme_location' => 'headernav',
    'container' => false,
    'items_wrap' => '%3$s',
    'echo' => false
  ));

  // Localize script with menu items
  wp_localize_script('your-script-handle', 'menuData', array(
    'leftMenu' => $left_menu_items,

  ));
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');