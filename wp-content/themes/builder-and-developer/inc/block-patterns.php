<?php
/**
 * Builder And Developer: Block Patterns
 *
 * @since Builder And Developer 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function builder_and_developer_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Builder And Developer 1.0
 *
 * @return void
 */
function builder_and_developer_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-banner' ),
		),
		'product-section' => array(
			'title'      => __( 'Product Section', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-product-section' ),
		),
		'about-section' => array(
			'title'      => __( 'About Section', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-about-section' ),
		),
		'testimonial-section' => array(
			'title'      => __( 'Testimonial Section', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-testimonial-section' ),
		),
		'news-section' => array(
			'title'      => __( 'News Section', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-news-section' ),
		),
		'faq-section' => array(
			'title'      => __( 'FAQ Section', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-faq-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'builder-and-developer' ),
			//'inserter' => false,
			'categories' => array( 'builder-and-developer-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'builder-and-developer' ),
			//'inserter' => false,
			'categories' => array( 'builder-and-developer-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'builder-and-developer' ),
			//'inserter' => false,
			'categories' => array( 'builder-and-developer-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'builder-and-developer' ),
			//'inserter' => false,
			'categories' => array( 'builder-and-developer-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'builder-and-developer' ),
			//'inserter' => false,
			'categories' => array( 'builder-and-developer-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-banner-sections' ),
		),
		'cover-with-search-title' => array(
			'title'    => __( 'Cover With Search Title', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-banner-sections' ),
		),
		'cover-with-archive-title' => array(
			'title'    => __( 'Cover With Archive Title', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-banner-sections' ),
		),
		'cover-with-index-title' => array(
			'title'    => __( 'Cover With Index Title', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'builder-and-developer' ),
			'categories' => array( 'builder-and-developer-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'builder-and-developer-footers' => array( 'label' => __( 'Footers', 'builder-and-developer' ) ),
		'builder-and-developer-headers' => array( 'label' => __( 'Headers', 'builder-and-developer' ) ),
		'builder-and-developer-pages'   => array( 'label' => __( 'Pages', 'builder-and-developer' ) ),
		'builder-and-developer-query'   => array( 'label' => __( 'Query', 'builder-and-developer' ) ),
		'builder-and-developer-sidebars'   => array( 'label' => __( 'Sidebars', 'builder-and-developer' ) ),
		'builder-and-developer-banner'   => array( 'label' => __( 'Banner Sections', 'builder-and-developer' ) ),
		'builder-and-developer-product-section'   => array( 'label' => __( 'Product Section', 'builder-and-developer' ) ),
		'builder-and-developer-about-section'   => array( 'label' => __( 'About Section', 'builder-and-developer' ) ),
		'builder-and-developer-testimonial-section'   => array( 'label' => __( 'Testimonial Section', 'builder-and-developer' ) ),
		'builder-and-developer-news-section'   => array( 'label' => __( 'News Section', 'builder-and-developer' ) ),
		'builder-and-developer-faq-section'   => array( 'label' => __( 'FAQ Section', 'builder-and-developer' ) ),
		'builder-and-developer-comment-section'   => array( 'label' => __( 'Comment Sections', 'builder-and-developer' ) ),
		'builder-and-developer-theme-button'   => array( 'label' => __( 'Theme Button Sections', 'builder-and-developer' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Builder And Developer 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'builder_and_developer_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Builder And Developer 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'builder_and_developer_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = builder_and_developer_get_pattern_content( $block_pattern );
		register_block_pattern(
			'builder-and-developer/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'builder_and_developer_register_block_patterns', 9 );
