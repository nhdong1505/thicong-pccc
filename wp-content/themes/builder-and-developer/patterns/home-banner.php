<?php
/**
 * Title: Home Banner
 * Slug: builder-and-developer/home-banner
 * Categories: template
 */
?>
<!-- wp:group {"className":"banner-section swiper mySwiper wow fadeIn","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"0","bottom":"0","left":"0rem","right":"0rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group banner-section swiper mySwiper wow fadeIn" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0rem;padding-bottom:0;padding-left:0rem"><!-- wp:group {"align":"full","className":"banner-inner swiper-wrapper","style":{"dimensions":{"minHeight":"800px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull banner-inner swiper-wrapper" style="min-height:800px"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg1.png","id":8,"dimRatio":70,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":800,"sizeSlug":"large","className":"swiper-slide banner-bg","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-cover swiper-slide banner-bg" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:800px"><img class="wp-block-cover__image-background wp-image-8 size-large" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"bnr-main-cont-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group bnr-main-cont-box"><!-- wp:columns {"verticalAlignment":"center","className":"banner-cont-outer-box","style":{"spacing":{"margin":{"bottom":"100px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center banner-cont-outer-box" style="margin-bottom:100px"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"banner-left-cont"} -->
<div class="wp-block-column is-vertically-aligned-center banner-left-cont" style="flex-basis:45%"><!-- wp:paragraph {"className":"banner-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"primary"} -->
<p class="banner-sub-title has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('build & developer company', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"banner-title","style":{"typography":{"fontSize":"40px","textTransform":"capitalize","lineHeight":"1.3"},"border":{"left":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"left":"15px"}}}} -->
<h2 class="wp-block-heading banner-title" style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;padding-left:15px;font-size:40px;line-height:1.3;text-transform:capitalize"><?php echo esc_html__('create the building you want here', 'builder-and-developer'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-desc","style":{"typography":{"fontSize":"15px","lineHeight":"1.5"},"spacing":{"margin":{"top":"15px","bottom":"0px"}}}} -->
<p class="banner-desc" style="margin-top:15px;margin-bottom:0px;font-size:15px;line-height:1.5"><?php echo esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btns"} -->
<div class="wp-block-buttons banner-btns"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"banner-btn1","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button banner-btn1"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('explore more', 'builder-and-developer'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"banner-btn2","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button banner-btn2"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('contact us', 'builder-and-developer'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"banner-right-blank"} -->
<div class="wp-block-column is-vertically-aligned-center banner-right-blank" style="flex-basis:55%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"banner-btm-text-box","style":{"spacing":{"margin":{"top":"0px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group banner-btm-text-box" style="margin-top:0px;margin-bottom:30px"><!-- wp:heading {"level":1,"className":"banner-btm-text","style":{"typography":{"textTransform":"uppercase","fontSize":"65px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"right":"0px","left":"0px"}}},"textColor":"background"} -->
<h1 class="wp-block-heading banner-btm-text has-background-color has-text-color has-link-color" style="margin-right:0px;margin-left:0px;font-size:65px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__('build & developer', 'builder-and-developer'); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-right-box1","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-right-box1" style="margin-top:0px;margin-bottom:0px"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-right-box2","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-right-box2" style="margin-top:0px;margin-bottom:0px"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg2.png","id":8,"dimRatio":70,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":800,"sizeSlug":"large","className":"swiper-slide banner-bg","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-cover swiper-slide banner-bg" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:800px"><img class="wp-block-cover__image-background wp-image-8 size-large" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"bnr-main-cont-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group bnr-main-cont-box"><!-- wp:columns {"verticalAlignment":"center","className":"banner-cont-outer-box","style":{"spacing":{"margin":{"bottom":"100px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center banner-cont-outer-box" style="margin-bottom:100px"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"banner-left-cont"} -->
<div class="wp-block-column is-vertically-aligned-center banner-left-cont" style="flex-basis:45%"><!-- wp:paragraph {"className":"banner-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"primary"} -->
<p class="banner-sub-title has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('build & developer company', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"banner-title","style":{"typography":{"fontSize":"40px","textTransform":"capitalize","lineHeight":"1.3"},"border":{"left":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"left":"15px"}}}} -->
<h2 class="wp-block-heading banner-title" style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;padding-left:15px;font-size:40px;line-height:1.3;text-transform:capitalize"><?php echo esc_html__('create the building you want here', 'builder-and-developer'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-desc","style":{"typography":{"fontSize":"15px","lineHeight":"1.5"},"spacing":{"margin":{"top":"15px","bottom":"0px"}}}} -->
<p class="banner-desc" style="margin-top:15px;margin-bottom:0px;font-size:15px;line-height:1.5"><?php echo esc_html__('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btns"} -->
<div class="wp-block-buttons banner-btns"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"banner-btn1","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button banner-btn1"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('explore more', 'builder-and-developer'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"banner-btn2","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button banner-btn2"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('contact us', 'builder-and-developer'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"banner-right-blank"} -->
<div class="wp-block-column is-vertically-aligned-center banner-right-blank" style="flex-basis:55%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"banner-btm-text-box","style":{"spacing":{"margin":{"top":"0px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group banner-btm-text-box" style="margin-top:0px;margin-bottom:30px"><!-- wp:heading {"level":1,"className":"banner-btm-text","style":{"typography":{"textTransform":"uppercase","fontSize":"65px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"right":"0px","left":"0px"}}},"textColor":"background"} -->
<h1 class="wp-block-heading banner-btm-text has-background-color has-text-color has-link-color" style="margin-right:0px;margin-left:0px;font-size:65px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__('build & developer', 'builder-and-developer'); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-right-box1","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-right-box1" style="margin-top:0px;margin-bottom:0px"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-right-box2","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-right-box2" style="margin-top:0px;margin-bottom:0px"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg3.png","id":8,"dimRatio":70,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":800,"sizeSlug":"large","className":"swiper-slide banner-bg","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-cover swiper-slide banner-bg" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:800px"><img class="wp-block-cover__image-background wp-image-8 size-large" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg3.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"bnr-main-cont-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group bnr-main-cont-box"><!-- wp:columns {"verticalAlignment":"center","className":"banner-cont-outer-box","style":{"spacing":{"margin":{"bottom":"100px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center banner-cont-outer-box" style="margin-bottom:100px"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"banner-left-cont"} -->
<div class="wp-block-column is-vertically-aligned-center banner-left-cont" style="flex-basis:45%"><!-- wp:paragraph {"className":"banner-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"primary"} -->
<p class="banner-sub-title has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('build & developer company', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"banner-title","style":{"typography":{"fontSize":"40px","textTransform":"capitalize","lineHeight":"1.3"},"border":{"left":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"left":"15px"}}}} -->
<h2 class="wp-block-heading banner-title" style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;padding-left:15px;font-size:40px;line-height:1.3;text-transform:capitalize"><?php echo esc_html__('create the building you want here', 'builder-and-developer'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-desc","style":{"typography":{"fontSize":"15px","lineHeight":"1.5"},"spacing":{"margin":{"top":"15px","bottom":"0px"}}}} -->
<p class="banner-desc" style="margin-top:15px;margin-bottom:0px;font-size:15px;line-height:1.5"><?php echo esc_html__('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btns"} -->
<div class="wp-block-buttons banner-btns"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"banner-btn1","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button banner-btn1"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('explore more', 'builder-and-developer'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"banner-btn2","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button banner-btn2"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('contact us', 'builder-and-developer'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"banner-right-blank"} -->
<div class="wp-block-column is-vertically-aligned-center banner-right-blank" style="flex-basis:55%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"banner-btm-text-box","style":{"spacing":{"margin":{"top":"0px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group banner-btm-text-box" style="margin-top:0px;margin-bottom:30px"><!-- wp:heading {"level":1,"className":"banner-btm-text","style":{"typography":{"textTransform":"uppercase","fontSize":"65px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"right":"0px","left":"0px"}}},"textColor":"background"} -->
<h1 class="wp-block-heading banner-btm-text has-background-color has-text-color has-link-color" style="margin-right:0px;margin-left:0px;font-size:65px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__('build & developer', 'builder-and-developer'); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-right-box1","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-right-box1" style="margin-top:0px;margin-bottom:0px"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-right-box2","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-right-box2" style="margin-top:0px;margin-bottom:0px"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-social-icons","style":{"spacing":{"padding":{"top":"5px","bottom":"12px","left":"5px","right":"5px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group banner-social-icons has-background-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:5px;padding-right:5px;padding-bottom:12px;padding-left:5px"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only","layout":{"type":"flex","orientation":"vertical"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"www.dribbble.com","service":"dribbble"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"className":"social-icon-text","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="social-icon-text has-foreground-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">follow us</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-navigation","style":{"spacing":{"padding":{"right":"0px","top":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-navigation" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"banner-nav-outer","layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-nav-outer"><!-- wp:group {"className":"banner-nav-inner-box","style":{"spacing":{"padding":{"top":"25%","bottom":"15px","left":"40px","right":"var:preset|spacing|80"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group banner-nav-inner-box has-primary-background-color has-background" style="padding-top:25%;padding-right:var(--wp--preset--spacing--80);padding-bottom:15px;padding-left:40px"><!-- wp:buttons {"className":"banner-navigate-btn"} -->
<div class="wp-block-buttons banner-navigate-btn"><!-- wp:button {"className":"banner-swiper-button-prev","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"width":"0px","style":"none"},"typography":{"fontSize":"16px"}}} -->
<div class="wp-block-button banner-swiper-button-prev"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;padding-top:10px;padding-bottom:10px;font-size:16px"><?php echo esc_html__('Previous', 'builder-and-developer'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"background","className":"banner-swiper-button-next","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"10px","bottom":"10px"}},"border":{"width":"0px","style":"none"},"typography":{"fontSize":"16px"}}} -->
<div class="wp-block-button banner-swiper-button-next"><a class="wp-block-button__link has-background-color has-text-color has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:16px"><?php echo esc_html__('Next', 'builder-and-developer'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"bnr-review-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group bnr-review-box"><!-- wp:paragraph {"align":"right","className":"banner-review","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"background"} -->
<p class="has-text-align-right banner-review has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:25px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__('1.5k+', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","className":"banner-review-text","style":{"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<p class="has-text-align-right banner-review-text has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:8px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('clients reviews', 'builder-and-developer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":118,"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"none","align":"right","className":"banner-review-img","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<figure class="wp-block-image alignright size-full is-resized banner-review-img" style="margin-top:0px;margin-bottom:0px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-review.png" alt="" class="wp-image-118" style="width:auto;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"banner-swiper-pagination"} -->
<div class="wp-block-buttons banner-swiper-pagination"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->