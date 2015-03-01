<?php
/**
 * Created by PhpStorm.
 * User: tektak
 * Date: 2/27/15
 * Time: 9:18 AM
 */

function learningWordPress_resources(){
    wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordPress_resources');

function learningWordPress_setup(){
    //Navigation Menus
    register_nav_menus(array(
        'primary' => __('Header Menu' ),
        'footer' => __( 'Footer Menu' )
    ));
    //adding featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail',180,120,true);
    add_image_size('photo-news',546,291,true);
    add_image_size('banner-image',774,320,true);
}

add_action('after_setup_theme','learningWordPress_setup');

//function show_subMenus(){
//    echo "menus";
//}
//
//add_action('wp_nav_menu','show_subMenus');

// Customize excerpt word count length
function custom_excerpt_length(){
    return 10;
}

add_filter('excerpt_length','custom_excerpt_length');