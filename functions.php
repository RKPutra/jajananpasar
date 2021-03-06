<?php  

function jajanan(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'jajanan');

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/asset/bootstrap/js/jquery.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/asset/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jquery-ui_js', get_template_directory_uri() . '/asset/bootstrap/js/jquery-ui.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap-datetimepic_js', get_template_directory_uri() . '/asset/bootstrap/js/bootstrap-datetimepicker.min.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

require_once('wp_bootstrap_navwalker.php');

$args = array(
	'width'         => 1624,
	'height'        => 700,
	'default-image' => get_template_directory_uri() . '/asset/images/header.png',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

function jajananPasar_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
}

add_action('after_setup_theme', 'jajananPasar_setup');