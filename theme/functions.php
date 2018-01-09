<?php
global $theme_version;
$theme_version = "1.0.1";

//Uncomment this for development reasons
//show_admin_bar( false );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/acf-json';
	// return
	return $path;
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

//Allow svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('wp_mail_from', 'new_mail_from');
function new_mail_from($old) {
	return 'info@domain.si'; // Change this data
}

add_filter('wp_mail_from_name', 'new_mail_from_name');
function new_mail_from_name($old) {
	return 'Name'; // Change this data
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
function theme_styles() {
	global $theme_version;
    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/public/css/app.css', '', $theme_version );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );
function theme_js() {
    global $wp_scripts, $theme_version;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/js/app.js', array('jquery'), $theme_version, true );
	wp_localize_script( 'theme_js', 'ajaxObject', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
