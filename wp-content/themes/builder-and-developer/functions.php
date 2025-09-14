<?php
/**
 * Builder And Developer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Builder And Developer
 */

if ( ! defined( 'BUILDER_AND_DEVELOPER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BUILDER_AND_DEVELOPER_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'builder_and_developer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function builder_and_developer_setup() {

		define('BUILDER_AND_DEVELOPER_LIVE_DEMO',__('https://demos.buywptemplates.com/builder-and-developer-pro/', 'builder-and-developer'));
		define('BUILDER_AND_DEVELOPER_BUY_PRO',__('https://www.buywptemplates.com/products/real-estate-developer-wordpress-theme', 'builder-and-developer'));
		define('BUILDER_AND_DEVELOPER_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/builder-and-developer-pro/', 'builder-and-developer'));
		define('BUILDER_AND_DEVELOPER_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/builder-and-developer-lite/', 'builder-and-developer'));
		define('BUILDER_AND_DEVELOPER_PRO_SUPPORT',__('https://buywptemplates.com/pages/community', 'builder-and-developer'));
		define('BUILDER_AND_DEVELOPER_FREE_SUPPORT',__('https://wordpress.org/support/theme/builder-and-developer/', 'builder-and-developer'));
		define('BUILDER_AND_DEVELOPER_REVIEW',__('https://wordpress.org/support/theme/builder-and-developer/reviews/', 'builder-and-developer'));	
		define('BUILDER_AND_DEVELOPER_CREDIT',__('https://www.buywptemplates.com/products/builder-and-developer', 'builder-and-developer'));

		load_theme_textdomain( 'builder-and-developer', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Enqueue editor styles.
		// add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Register nav menus.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'builder-and-developer' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'builder_and_developer_setup' );

/**
 * Enqueue scripts and styles.
 */
function builder_and_developer_scripts() {
	// Enqueue Google Fonts for Vietnamese support
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap', array(), null );
	
	wp_enqueue_style('builder-and-developer-style', get_stylesheet_uri(), array() );
	wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/js/wow.js', array('jquery') );
	wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/css/animate.css' );
	wp_enqueue_style('swiper-css', esc_url(get_template_directory_uri())."/css/swiper-bundle.css");
	wp_enqueue_script('swiper-js', esc_url(get_template_directory_uri()). '/js/swiper-bundle.js', array('jquery'));
	wp_enqueue_script( 'builder-and-developer-custom-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'),'' ,true );
	wp_style_add_data( 'builder-and-developer-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'builder_and_developer_scripts' );

/**
 * Enqueue block editor style
 */
function builder_and_developer_block_editor_styles() {
	wp_enqueue_style( 'builder-and-developer-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );	
}
add_action( 'enqueue_block_editor_assets', 'builder_and_developer_block_editor_styles' );

function builder_and_developer_init_setup() {
	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';

	/**
	 * TGM
	 */
	require_once get_template_directory() . '/inc/tgm/tgm.php';
}
add_action( 'after_setup_theme', 'builder_and_developer_init_setup' );	

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';

/**
 * Section Pro
 */
require get_template_directory() . '/inc/section-pro/customizer.php';