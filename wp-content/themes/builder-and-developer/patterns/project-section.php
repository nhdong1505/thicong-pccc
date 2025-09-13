<?php
/**
 * Title: Project Section
 * Slug: builder-and-developer/project-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"project-head-box wow fadeInDown","layout":{"type":"constrained"}} -->
<div class="wp-block-group project-head-box wow fadeInDown"><!-- wp:paragraph {"align":"center","className":"project-small-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"17px"},"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"},"margin":{"bottom":"0px"}},"border":{"radius":"4px"}},"textColor":"primary"} -->
<p class="has-text-align-center project-small-title has-primary-color has-text-color has-link-color" style="border-radius:4px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;font-size:17px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('company projects', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"project-sec-heading","style":{"typography":{"textTransform":"capitalize","fontSize":"28px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px","bottom":"0rem"}}}} -->
<h3 class="wp-block-heading has-text-align-center project-sec-heading" style="margin-top:0px;margin-bottom:0rem;font-size:28px;font-style:normal;font-weight:700;line-height:1.2;text-transform:capitalize"><?php echo esc_html__('our company completes projects', 'builder-and-developer'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"project-bg-heading","style":{"typography":{"fontSize":"60px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<h3 class="wp-block-heading has-text-align-center project-bg-heading has-foreground-color has-text-color has-link-color" style="font-size:60px;text-transform:uppercase"><?php echo esc_html__('company projects', 'builder-and-developer'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"swiper1 mySwiper1 wow zoomIn"} -->
<div class="wp-block-query swiper1 mySwiper1 wow zoomIn"><!-- wp:post-template {"className":"project-box swiper-wrapper","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"project-main-box","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group project-main-box" style="padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px"><!-- wp:group {"className":"project-img","style":{"dimensions":{"minHeight":"230px"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#00000069"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group project-img has-background" style="border-radius:10px;background-color:#00000069;min-height:230px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"230px","align":"wide","style":{"color":[],"border":{"radius":"0px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","className":"project-catgory","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"2px","bottom":"2px","left":"10px","right":"10px"}},"typography":{"fontSize":"15px"}},"backgroundColor":"primary","textColor":"background"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"className":"project-title","style":{"spacing":{"margin":{"bottom":"5px","top":"5px"},"padding":{"top":"0px","bottom":"0px","left":"12px","right":"12px"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:post-excerpt {"moreText":"read more","excerptLength":15,"className":"project-desc","style":{"typography":{"fontSize":"15px","lineHeight":1.4},"spacing":{"margin":{"top":"0px","bottom":"5px"},"padding":{"top":"0px","bottom":"12px","left":"12px","right":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->
<!-- /wp:post-template -->

<!-- wp:buttons {"className":"project-swiper-pagination"} -->
<div class="wp-block-buttons project-swiper-pagination"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:query -->