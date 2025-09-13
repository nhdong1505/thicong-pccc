<?php
add_action( 'admin_menu', 'builder_and_developer_gettingstarted' );
function builder_and_developer_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'builder-and-developer'), esc_html__('About Theme', 'builder-and-developer'), 'edit_theme_options', 'builder-and-developer-guide-page', 'builder_and_developer_guide');
}

function builder_and_developer_admin_theme_style() {
   wp_enqueue_style('builder-and-developer-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('builder-and-developer-tab', esc_url( get_template_directory_uri() ) . '/inc/dashboard/js/get_started_tab.js');
}
add_action('admin_enqueue_scripts', 'builder_and_developer_admin_theme_style');         

function builder_and_developer_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started activation-notice">
		<div class="notice-info">
			<div class="notice-image">
				<img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
			</div>
			<div class="notice-content">
				<h2><?php esc_html_e( 'Thanks For Installing Builder And Developer, You Rock!', 'builder-and-developer' ) ?> </h2>
				<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional charity website. Please Click on the link below to know the theme setup information.', 'builder-and-developer' ) ?></p>
				<div style="display: grid;">
					<a class="button notice-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=builder-and-developer-guide-page' )); ?>"><?php esc_html_e( 'Getting Started', 'builder-and-developer' ) ?></a>
					<a class="button notice-btn" target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_LIVE_DEMO ); ?>"><?php esc_html_e('Pro Demo', 'builder-and-developer') ?></a>
					<a  class="button notice-btn" target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_FREE_DOC ); ?>"><?php esc_html_e('Free Doc', 'builder-and-developer') ?></a>
					<a  class="button notice-btn" target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_BUY_PRO ); ?>"><?php esc_html_e('Upgrade To Pro', 'builder-and-developer') ?></a>
				</div>
			</div>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'builder_and_developer_notice');

/**
 * Theme Info Page
 */
function builder_and_developer_guide() {
	// Theme info
	$builder_and_developer_return = add_query_arg( array()) ;
	$builder_and_developer_theme = wp_get_theme( 'builder-and-developer' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
		    <div>
                <h2 class="tgmpa-notice-warning"></h2>
            </div>
		</div>
		<div class="tab-sec">
			<div class="tab">
				<button role="tab" class="tablinks home" onclick="builder_and_developer_openCity(event, 'bwp_getstart')"><?php esc_html_e( 'About Theme', 'builder-and-developer' ); ?></button>
				<button role="tab" class="tablinks" onclick="builder_and_developer_openCity(event, 'bwp_setup')"><?php esc_html_e( 'Free Theme Information', 'builder-and-developer' ); ?></button>
				<button role="tab" class="tablinks" onclick="builder_and_developer_openCity(event, 'bwp_premium_info')"><?php esc_html_e( 'Premium Theme Information', 'builder-and-developer' ); ?></button>
				<a class="tablinks tablinks-demo" role="tab" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_LIVE_DEMO ); ?>" target="_blank">
					<?php esc_html_e( 'Live Demo', 'builder-and-developer' ); ?>
				</a>
				<a class="tablinks tablinks-pro" role="tab" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_BUY_PRO ); ?>" target="_blank">
					<?php esc_html_e( 'Buy Pro', 'builder-and-developer' ); ?>
				</a>
			</div>
			<div  id="bwp_getstart" class="tabcontent">
				<div class="row">
					<div class="col-md-5 intro">
						<div class="pad-box">
							<h2><?php esc_html_e( 'Welcome to Builder And Developer ', 'builder-and-developer' ); ?>
							<span><?php esc_html_e( 'Version: ', 'builder-and-developer' ); ?><?php echo esc_html($builder_and_developer_theme['Version']);?></span>
							</h2>
							<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'builder-and-developer' ); ?>
							</span>
							<div class="powered-by">
								<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'builder-and-developer' ); ?></strong></p>
								<p>
									<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
								</p>
						
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="install-plugins">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="<?php echo esc_attr( 'responsive-image', 'builder-and-developer'); ?>" />
						</div>
					</div>
				</div>
				<div class="dashboard__blocks">
					<div class="row">
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Get Support','builder-and-developer'); ?></h3>
							<ol>
								<li><a target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','builder-and-developer'); ?></a></li>
								<li><a target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','builder-and-developer'); ?></a></li>
							</ol>
						</div>
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Getting Started','builder-and-developer'); ?></h3>
							<ol>
								<li><?php esc_html_e( 'Start','builder-and-developer'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','builder-and-developer'); ?></a> <?php esc_html_e( 'your website.','builder-and-developer'); ?> </li>
							</ol>
						</div>
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Help Docs','builder-and-developer'); ?></h3>
							<ol>
								<li><a target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','builder-and-developer'); ?></a></li>
								<li><a target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','builder-and-developer'); ?></a></li>
							</ol>
						</div>
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Buy Premium','builder-and-developer'); ?></h3>
							<ol>
								<a href="<?php echo esc_url( BUILDER_AND_DEVELOPER_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'builder-and-developer'); ?></a>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div  id="bwp_setup" class="tabcontent">
				<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1) Setup Builder And Developer Theme', 'builder-and-developer' ); ?></h2>
				<div class="row">
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
							<p><?php esc_html_e( 'The Builder and Developer WordPress is a modern, responsive, and professional theme designed for businesses in the construction, real estate, property development, architecture, and building services industries. Whether you are a contractor, home builder, civil engineer, or real estate agent, this theme offers a clean and structured layout to showcase your projects, highlight services, and build trust with potential clients. With its user-friendly design, you can display completed projects, ongoing developments, and client testimonials in a visually appealing way. The theme includes dedicated sections for services, portfolios, and call-to-action buttons, helping you generate leads and convert visitors into customers. A built-in blog lets you share industry updates, tips, and news to strengthen your brand authority. The Builder and Developer theme is fully responsive, ensuring your website looks great on desktops, tablets, and smartphones. It is also optimized for SEO, so your site can rank higher in search results. Fast-loading and easy to customize, it’s perfect for anyone looking to create a professional online presence without coding knowledge. Start building your future online with this free and powerful theme.', 'builder-and-developer' ); ?><p><br>
							<ol>
								<li><?php esc_html_e( 'Start','builder-and-developer'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','builder-and-developer'); ?></a> <?php esc_html_e( 'your website.','builder-and-developer'); ?> </l>
								<li><?php esc_html_e( 'Builder And Developer','builder-and-developer'); ?> <a target="_blank" href="<?php echo esc_url( BUILDER_AND_DEVELOPER_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','builder-and-developer'); ?></a> </li>
							</ol>
						</div>
					</div>
					<div class="col-md-5">
						<div class="pad-box">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-12 text-block tabcontent"  id="bwp_premium_info">
				<h2 class="dashboard-install-title"><?php esc_html_e( '2) Premium Theme Information.','builder-and-developer'); ?></h2>
				<div class="row">
					<div class="col-md-7">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="<?php echo esc_attr( 'responsive-image', 'builder-and-developer'); ?>">
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','builder-and-developer'); ?></h3>
							<p class="pad-box-p"><?php esc_html_e( 'The Real Estate Developer WordPress Theme is a premium, feature-rich solution designed for professionals and companies looking to make a strong impression in the property and development industry. With a sophisticated, modern design, this theme offers a perfect balance between aesthetics and functionality, ensuring your brand stands out while delivering a seamless user experience. Its flexible layout allows you to showcase residential, commercial, or mixed-use projects with stunning visuals and organized details. Whether you want to present completed developments, ongoing projects, or upcoming launches, the theme’s project portfolio system makes it easy to display your work in a professional and engaging way. A strategically crafted homepage guides visitors through your offerings, from featured listings to client testimonials, while clear navigation ensures they can access information effortlessly. Fully responsive and mobile-friendly, it guarantees your website looks flawless on every device. Ideal for real estate developers, property builders, construction firms, and architectural studios, this theme helps you create a polished, high-converting website without the need for advanced technical skills.

							Packed with premium features, the Real Estate Developer WordPress Theme offers everything you need to elevate your online presence. Advanced property listing modules allow you to showcase properties with images, descriptions, pricing, maps, and virtual tour integration. Customizable contact and inquiry forms make it easy for prospects to connect, while integrated call-to-action buttons encourage engagement. You can also feature team profiles, service overviews, and company milestones to build credibility. The theme supports blog integration, enabling you to share market insights, investment tips, and company updates that boost SEO and audience trust. Performance-optimized and built with clean code, it ensures fast load times and strong search engine visibility. With multiple layout options, custom color schemes, Google Fonts integration, and advanced typography controls, you can tailor the design to perfectly match your brand. It’s also compatible with popular plugins like WooCommerce for selling property-related services, WPML for multilingual sites, and Elementor for drag-and-drop customization. Whether your goal is to attract new clients, showcase premium developments, or strengthen your market reputation, this theme provides a powerful and elegant platform to grow your real estate business.', 'builder-and-developer' ); ?><p>
						</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Features','builder-and-developer'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Responsive & Mobile-Friendly Design','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Retina-Ready Display','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Bootstrap Framework','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Fast Load Times','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Extensive Customization Options','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Interactive CTA Buttons','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Dynamic Banner Section','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Testimonial Section','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Team Showcase Section','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Pre-Built Shortcodes','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Clean and Secure Code','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'SEO-Optimized Structure','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Minimal and Elegant Layout','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'One-Click Demo Import','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Compatibility','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Customizable Typography','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Color Scheme Control','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Cross-Browser Compatibility','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Regular Theme Updates','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Built for Print-on-Demand Businesses','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Lightweight Theme Architecture','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Easy Product Showcase','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Blog Section Included','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Contact Form Integration','builder-and-developer'); ?></li>
									<li><?php esc_html_e( 'Compatible with Page Builders','builder-and-developer'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
