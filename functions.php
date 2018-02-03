<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support( 'custom-background' );

add_theme_support( 'title-tag' );

require_once ( get_stylesheet_directory() . "/options.php");

function my_theme_load_resources() {


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/style/bootstrap.css', array(), '0.1' );	
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/style/jquery.fancybox.min.css', array(), '0.1' );	
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/style/magnific-popup.css', array(), '0.1' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/style/fontawesome.min.css', array(), '0.1' );
	
	wp_enqueue_style( 'fontscss', get_template_directory_uri() . '/fonts/fonts.css', array(), '0.1' );	
	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/style/main.css', array(), '0.1' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '0.1', true );
    wp_enqueue_script( 'scroll_plugin', get_template_directory_uri() . '/js/fixed-top-animated-menu.1.0.js', array(), '0.1', true );
    wp_enqueue_script( 'nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array(), '0.1', true );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '0.1', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), '0.1', true );
    wp_enqueue_script( 'magnificjs', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '0.1', true );


	wp_enqueue_script( 'commonjs', get_template_directory_uri() . '/js/common.js', array(), '0.1' );

};
add_action( 'wp_enqueue_scripts', 'my_theme_load_resources' );
