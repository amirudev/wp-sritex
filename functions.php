<?php
$version = wp_get_theme()->get('version');

function site_compatibility()
{
	wp_enqueue_style('Bootstrap CSS', get_template_directory_uri() . '/assets/css/bootstrap.min.css', $version);
	wp_enqueue_style('compro_css', get_template_directory_uri() . '/style.css', $version);
	wp_enqueue_style('AOS CSS', get_template_directory_uri() . '/assets/css/aos.css', $version);
	wp_enqueue_script('AOS JS', get_template_directory_uri() . '/assets/js/aos.js', $version);
	// wp_enqueue_script('Bootstrap JS', get_template_directory_uri() . '/assets/bootstrap.bundle.min.js', $version);
}

function site_initialize()
{
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', $version);
}

function site_custom_fonts()
{
	// wp_enqueue_style('Lato Regular Font', get_template_directory_uri() . '/assets/fonts/Lato-Regular.ttf', $version);
	// wp_enqueue_style('Playfair Bold Font', get_template_directory_uri() . '/assets/fonts/PlayfairDisplay-Bold.ttf', $version);
}

function compro_theme_support(){
	add_theme_support('custom-logo', array(
		'height' => 200,
		'width' => 400
	));
}

function compro_customize_frontpage($wp_customize){
	$wp_customize->add_section('wp_frontpage_section', array(
		'title' => 'Front Page',
		'priority' => 30
	));

	$wp_customize->add_setting('wp_frontpage-image', array());
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'wp_frontpage-image',
		array(
			'label' => __('Master Image', 'wp'),
			'description' => 'Appear first time at Frontpage',
			'section' => 'wp_frontpage_section',
			'settings' => 'wp_frontpage-image',
			'priority' => 1,
		)
	));
}
 
// Main Website Functionality
add_action('wp_enqueue_scripts', 'site_compatibility');
add_action('wp_enqueue_scripts', 'site_initialize');
add_action('enqueue_block_assets', 'site_custom_fonts');

// Site Configuration
add_action('after_setup_theme', 'compro_theme_support');
add_action('customize_register', 'compro_customize_frontpage');