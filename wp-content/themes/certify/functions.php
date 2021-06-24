<?php

// Global variables define
define('CERTIFY_PARENT_TEMPLATE_DIR_URI',get_template_directory_uri());	
define('CERTIFY_ST_TEMPLATE_DIR_URI',get_stylesheet_directory_uri());
define('CERTIFY_ST_TEMPLATE_DIR',get_stylesheet_directory());

add_action( 'wp_enqueue_scripts', 'certify_theme_css',999);
function certify_theme_css() {
	
	if(get_theme_mod('custom_color_enable') == false)
	{
		wp_enqueue_style('certify-default-style-css', CERTIFY_ST_TEMPLATE_DIR_URI ."/css/default.css" );
	}
    wp_enqueue_style( 'certify-parent-style', CERTIFY_PARENT_TEMPLATE_DIR_URI . '/style.css' );
	wp_enqueue_style('bootstrap', ST_TEMPLATE_DIR . '/css/bootstrap.css');
	wp_enqueue_style('certify-child-style',CERTIFY_ST_TEMPLATE_DIR_URI . '/style.css',array('parent-style'));
	wp_enqueue_style('certify-theme-menu-style', CERTIFY_ST_TEMPLATE_DIR_URI .'/css/theme-menu.css');
	
	wp_enqueue_style('certify-media-responsive-css', CERTIFY_ST_TEMPLATE_DIR_URI ."/css/media-responsive.css" );

}



if ( ! function_exists( 'certify_theme_setup' ) ) :

function certify_theme_setup() {

//Load text domain for translation-ready
load_theme_textdomain( 'certify', CERTIFY_ST_TEMPLATE_DIR . '/languages' );

if ( is_admin() ) {
				require CERTIFY_ST_TEMPLATE_DIR . '/admin/admin-init.php';
			}

}
endif; 
add_action( 'after_setup_theme', 'certify_theme_setup' );

/**
 * Import options from SpicePress
 *
 */
function certify_get_lite_options() {
	$spicepress_mods = get_option( 'theme_mods_spicepress' );
	if ( ! empty( $spicepress_mods ) ) {
		foreach ( $spicepress_mods as $spicepress_mod_k => $spicepress_mod_v ) {
			set_theme_mod( $spicepress_mod_k, $spicepress_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'certify_get_lite_options' );


add_action( 'admin_init', 'certify_detect_button' );
	function certify_detect_button() {
	wp_enqueue_style('certify-info-button', CERTIFY_ST_TEMPLATE_DIR_URI .'/css/import-button.css');
}

if ( ! function_exists( 'wp_body_open' ) ) {

	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
}

//Set for old user before 1.3.6
if (!get_option('certify_user_with_1_3_6', false)) {
    //detect old user and set value
    $certify_service_title=get_theme_mod('home_service_section_title');
    $certify_service_discription=get_theme_mod('home_service_section_discription');
    $certify_blog_title=get_theme_mod('home_news_section_title');
    $certify_blog_discription=get_theme_mod('home_news_section_discription');
    $certify_slider_title=get_theme_mod('home_slider_title');
    $certify_slider_discription=get_theme_mod('home_slider_discription'); 
    $certify_testimonial_title=get_theme_mod('home_testimonial_section_title'); 
    $certify_testimonial__discription=get_theme_mod('home_testimonial_section_discription');
    $certify_footer_credit=get_theme_mod('footer_copyright_text');

    if ($certify_service_title !=null || $certify_service_discription !=null || $certify_blog_title !=null || $certify_blog_discription !=null || $certify_slider_title !=null || $certify_slider_discription !=null || $certify_testimonial_title !=null || $certify_testimonial__discription !=null || $certify_footer_credit !=null )  {
        add_option('certify_user_with_1_3_6', 'old');

    } else {
        add_option('certify_user_with_1_3_6', 'new');
    }
}

//Remove Footer section
function certify_remove_customize_register( $wp_customize ) {

   $wp_customize->remove_section( 'spicepress_footer_copyright');

}
add_action( 'customize_register', 'certify_remove_customize_register',11);