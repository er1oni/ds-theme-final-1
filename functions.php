<?php

<<<<<<< HEAD
function wpdevs_load_scripts(){
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

function wpdevs_config(){
=======
function ds_theme_load_scripts (){
    wp_enqueue_style( 'dstheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' ); 
    wp_enqueue_style('google-fonts', ' https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null); 
    wp_enqueue_script('dropdown', get_template_directory_uri().'js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'ds_theme_load_scripts');

register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
    );


function dstheme_config(){
>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
<<<<<<< HEAD
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
}
add_action( 'after_setup_theme', 'wpdevs_config', 0 );

add_action( 'widgets_init', 'wpdevs_sidebars' );
function wpdevs_sidebars(){
    register_sidebar(
        array(
            'name'  => 'Blog Sidebar',
            'id'    => 'sidebar-blog',
            'description'   => 'This is the Blog Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
=======
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header',$args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width'> 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));

    }

add_action('after_setup_theme', 'dstheme_config', 0);

add_action('widgets_init', 'dstheme_sidebars');
function dstheme_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the Blog Sidebar. You can add your widgets here.',
            'before_widget' => '<div class = "widget-title">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
        )
    );
    register_sidebar(
        array(
<<<<<<< HEAD
            'name'  => 'Service 1',
            'id'    => 'services-1',
            'description'   => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
=======
            'name' => 'Service 1',
            'id' => 'services-1',
            'description' => 'First service area',
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
        )
    );
    register_sidebar(
        array(
<<<<<<< HEAD
            'name'  => 'Service 2',
            'id'    => 'services-2',
            'description'   => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
=======
            'name' => 'Services-2',
            'id' => 'services-2',
            'description' => 'Second service area',
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
        )
    );
    register_sidebar(
        array(
<<<<<<< HEAD
            'name'  => 'Service 3',
            'id'    => 'services-3',
            'description'   => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}
=======
            'name' => 'Service-3',
            'id' => 'service-3',
            'description' => 'Third service area',
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );
} 


?>
>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
