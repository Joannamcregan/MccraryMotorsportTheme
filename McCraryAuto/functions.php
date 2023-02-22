<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function mccrary_theme_files(){
    wp_enqueue_style('McCrary-site-styles', get_stylesheet_directory_uri() . '/css/site-styles.css', false, '', 'all');
    wp_enqueue_style('McCrary-sections', get_stylesheet_directory_uri() . '/css/sections.css', false, '', 'all');
}

add_action('wp_enqueue_scripts','mccrary_theme_files');

function services_custom_post_types() {
    register_post_type('service', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-edit'
    ));
}

add_action('init', 'services_custom_post_types');

?>