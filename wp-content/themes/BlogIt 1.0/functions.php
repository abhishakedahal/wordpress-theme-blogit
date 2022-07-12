<?php

function blogit_theme_support()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'blogit_theme_support');


function blogit_enqueue_scripts()
{
	wp_enqueue_style('blogit-style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('blogit-css-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('blogit-responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('blogit-jquery-mcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	wp_enqueue_style('google-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('jquery-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');
}
add_action('wp_enqueue_scripts', 'blogit_enqueue_scripts');


function blogit_enqueue_javascript()
{
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', '', '', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', '', '', true);
	wp_enqueue_script('plugin', get_template_directory_uri() . '/js/plugin.js', '', '', true);
	wp_enqueue_script('jquery.mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', '', '', true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', '', '', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true);
	wp_enqueue_script('fancybox', 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', '', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'blogit_enqueue_javascript');
