<?php

/**
 * maggie Blog & Magazine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maggie_Blog_&_Magazine
 */

// Require Files

//require_once( get_theme_file_path( "/options/opt-config.php" ) );
//require_once( get_theme_file_path( "/inc/mb/metabox.php" ) );
//require_once( get_theme_file_path( "/inc/tgm.php" ) );


// Content Wide

if ( ! isset( $content_width ) ) $content_width = 1140;

// Theme Support

function maggie_theme_setup() {
    load_theme_textdomain( "maggie", get_theme_file_path("/languages") );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( "automatic-feed-links");
    add_theme_support( "custom-header");
    $maggie_custom_header_details = array(
        'header-text'           => true,
        'default-text-color'    => 'white',
    );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support("custom-background");
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "mainmenu", __( "Main Menu", "maggie" ) );
    register_nav_menu( "footermenu", __( "Footer Menu", "maggie" ) );
    add_image_size( "maggie-blog", 258, 190, true );
    add_image_size( "maggie-blog-related", 308, 211, true );
    add_image_size( "maggie-project-slider", 263, 180, true );
}

add_action( "after_setup_theme", "maggie_theme_setup" );

// Assets Enqueue

function maggie_assets() {
    wp_enqueue_style( "maggie-css", get_stylesheet_uri(), null, "1.0.0" );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    
    wp_enqueue_script( "popper-js", get_theme_file_uri( "/js/bootstrap/popper.min.js" ), array( "jquery" ), "1.0.0", true  );
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/js/bootstrap/bootstrap.min.js" ), array( "jquery" ), "4.3.1", true  );
    wp_enqueue_script( "affix-js", get_theme_file_uri( "/js/plugins/plugins.js" ), array( "jquery" ), "1.0.8", true  );
    wp_enqueue_script( "maggie-js", get_theme_file_uri( "/js/active.js" ), array( "jquery" ), "1.0.0", true );
}

add_action( "wp_enqueue_scripts", "maggie_assets" );

/**
* Custom except length
*/
function deneb_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'deneb_custom_excerpt_length', 700 );

/**
* Except Filter
*/
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

function maggieCarbon_portfolio_metabox(){
    Container::make("post_meta",__('Event Info', 'maggie'))
    ->where('post_type', '=', 'event')
    ->set_priority('high')
    ->add_fields([
        Field::make('text','ct_event_date',__('Event Date','maggie')),
        Field::make('text','ct_event_location',__('Event Location','maggie')),
        Field::make('image','ct_event_pospect',__('Event Photo','maggie')),
        Field::make( 'complex', 'crb_gallery', 'Gallery' )
            ->add_fields( array(
                Field::make( 'image', 'image', 'Gallery' ),
            ) ),
    ]);
}
add_action('carbon_fields_register_fields', 'maggieCarbon_portfolio_metabox');