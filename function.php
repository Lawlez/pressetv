<?php
//2019 Dominik Feger

function bootstrapptv_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapptv-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapptv_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapptv_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapptv_enqueue_scripts' );


function bootstrapptv_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstrapptv_register_menu' );
?>