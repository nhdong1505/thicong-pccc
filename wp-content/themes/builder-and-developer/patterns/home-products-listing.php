<?php
/**
 * Title: Home Products Listing
 * Slug: builder-and-developer/home-products-listing
 * Categories: template
 */
?>
<!-- wp:group {"className":"products-section wow fadeInUp","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group products-section wow fadeInUp" style="padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0">
	<!-- wp:group {"className":"products-head-box","layout":{"type":"constrained"}} -->
	<div class="wp-block-group products-head-box">
		<!-- wp:paragraph {"align":"center","className":"products-small-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"17px"},"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"},"margin":{"bottom":"0px"}},"border":{"radius":"4px"}},"textColor":"primary"} -->
		<p class="has-text-align-center products-small-title has-primary-color has-text-color has-link-color" style="border-radius:4px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;font-size:17px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('sản phẩm nổi bật', 'builder-and-developer'); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":3,"className":"products-sec-heading","style":{"typography":{"textTransform":"capitalize","fontSize":"28px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"10px","bottom":"0rem"}}}} -->
		<h3 class="wp-block-heading has-text-align-center products-sec-heading" style="margin-top:10px;margin-bottom:0rem;font-size:28px;font-style:normal;font-weight:700;line-height:1.2;text-transform:capitalize"><?php echo esc_html__('khám phá sản phẩm của chúng tôi', 'builder-and-developer'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":3,"className":"products-bg-heading","style":{"typography":{"fontSize":"60px","textTransform":"uppercase","opacity":"0.1"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
		<h3 class="wp-block-heading has-text-align-center products-bg-heading has-foreground-color has-text-color has-link-color" style="font-size:60px;text-transform:uppercase;opacity:0.1"><?php echo esc_html__('sản phẩm', 'builder-and-developer'); ?></h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":12,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["products"],"patternName":"core/query-standard-products","name":"Standard"},"className":"products-grid wow zoomIn"} -->
	<div class="wp-block-query products-grid wow zoomIn">
		<!-- wp:post-template {"className":"products-wrapper","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"product-item","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"margin":{"bottom":"30px"}},"border":{"radius":"10px"},"color":{"background":"#ffffff"},"boxShadow":"0 0 20px rgba(0,0,0,0.1)"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group product-item has-background" style="border-radius:10px;background-color:#ffffff;box-shadow:0 0 20px rgba(0,0,0,0.1);margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
			<!-- wp:group {"className":"product-image","style":{"dimensions":{"minHeight":"250px"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#f8f9fa"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group product-image has-background" style="border-radius:8px;background-color:#f8f9fa;min-height:250px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
				<!-- wp:post-featured-image {"isLink":true,"height":"250px","align":"wide","style":{"color":[],"border":{"radius":"8px"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"product-content","style":{"spacing":{"padding":{"top":"20px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group product-content" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px">
				<!-- wp:post-terms {"term":"product_cat","className":"product-category","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0px","bottom":"10px"},"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}},"typography":{"fontSize":"12px","textTransform":"uppercase","fontWeight":"500"}},"backgroundColor":"primary","textColor":"background"} /-->

				<!-- wp:post-title {"level":4,"isLink":true,"className":"product-title","style":{"spacing":{"margin":{"bottom":"10px","top":"0px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

				<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"className":"product-description","style":{"typography":{"fontSize":"14px","lineHeight":"1.5","color":"#666666"},"spacing":{"margin":{"top":"0px","bottom":"15px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

				<!-- wp:group {"className":"product-footer","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"10px"},"margin":{"top":"0px","bottom":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group product-footer" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
					<!-- wp:woocommerce/product-price {"className":"product-price","style":{"typography":{"fontSize":"18px","fontWeight":"700","color":"var:preset|color|primary"}}} /-->

					<!-- wp:woocommerce/product-button {"className":"product-button","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"8px","bottom":"8px"}},"typography":{"fontSize":"14px","fontWeight":"500","textTransform":"uppercase"},"border":{"radius":"5px","width":"0px","style":"none"}},"backgroundColor":"primary","textColor":"background"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
		<p class="has-text-align-center" style="font-size:18px"><?php echo esc_html__('Không có sản phẩm nào được tìm thấy.', 'builder-and-developer'); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:group {"className":"products-view-all","style":{"spacing":{"padding":{"top":"40px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group products-view-all" style="padding-top:40px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"view-all-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"5px","width":"0px","style":"none"}}} -->
			<div class="wp-block-button view-all-btn">
				<a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" style="border-style:none;border-width:0px;border-radius:5px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('xem tất cả sản phẩm', 'builder-and-developer'); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
