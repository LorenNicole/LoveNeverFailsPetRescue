<?php
/**
 * Banner Section
 * 
 * slug: kids-toys-store/banner
 * title: Banner
 * categories: kids-toys-store
 */


 $kids_toys_store_plugins_list = get_option('active_plugins');
 $kids_toys_store_gutentor_plugin = 'gutentor/gutentor.php'; 
$kids_toys_store_woocommerce_plugin = 'woocommerce/woocommerce.php';
 $kids_toys_store_results = (in_array($kids_toys_store_woocommerce_plugin, $kids_toys_store_plugins_list) && in_array($kids_toys_store_gutentor_plugin, $kids_toys_store_plugins_list));
if ( $kids_toys_store_results ) 
    {
    return array(
        'title'      =>__( 'Banner', 'kids-toys-store' ),
        'categories' => array( 'kids-toys-store' ),
        'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"dimensions":{"minHeight":"600px"}},"backgroundColor":"fifthaccent","layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
        <div class="wp-block-group has-fifthaccent-background-color has-background" style="min-height:600px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"className":"slider-category-col","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":{"top":"0","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns slider-category-col" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"70%","className":"banner-col-left wow zoomInLeft","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-column banner-col-left wow zoomInLeft" style="flex-basis:70%"><!-- wp:group {"className":"owl-main-slider owl-carousel","style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group owl-main-slider owl-carousel"><!-- wp:group {"className":"main-slider01","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"500px"}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group main-slider01 has-accent-background-color has-background" style="border-radius:10px;min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"main-slider-col01","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center main-slider-col01" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"poppins"} -->
        <p class="has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size">'. esc_html__('Best Seller Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background"} -->
        <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:40px">'. esc_html__('Find The Best Toys For Your Kids','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"6px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('Book Now','kids-toys-store').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","className":"main-slider-col02"} -->
        <div class="wp-block-column main-slider-col02" style="flex-basis:50%"><!-- wp:image {"id":29,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner01.png" alt="" class="wp-image-29" style="object-fit:contain"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"main-slider02","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"500px"}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group main-slider02 has-accent-background-color has-background" style="border-radius:10px;min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"main-slider-col01","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center main-slider-col01" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"poppins"} -->
        <p class="has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size">'. esc_html__('Best Seller Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background"} -->
        <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:40px">'. esc_html__('Find The Best Toys For Your Kids','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"6px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('Book Now','kids-toys-store').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","className":"main-slider-col02"} -->
        <div class="wp-block-column main-slider-col02" style="flex-basis:50%"><!-- wp:image {"id":30,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner02.png" alt="" class="wp-image-30" style="object-fit:contain"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"main-slider03","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"500px"}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group main-slider03 has-accent-background-color has-background" style="border-radius:10px;min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"main-slider-col02","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center main-slider-col02" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"poppins"} -->
        <p class="has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size">'. esc_html__('Best Seller Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background"} -->
        <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:40px">'. esc_html__('Find The Best Toys For Your Kids','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"6px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('Book Now','kids-toys-store').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":31,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner03.png" alt="" class="wp-image-31" style="object-fit:contain"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%","className":"banner-right-col wow zoomInRight","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-column banner-right-col wow zoomInRight has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:30%"><!-- wp:group {"className":"banner-right-col-01","layout":{"type":"constrained"}} -->
        <div class="wp-block-group banner-right-col-01"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontSize":"normal","fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-poppins-font-family has-normal-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700">'. esc_html__('Product Categories','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"dynamic-product-category","layout":{"type":"constrained"}} -->
        <div class="wp-block-group dynamic-product-category"><!-- wp:gutentor/t1 {"gID":"g-31lee1g","blockSortableItems":[{"itemValue":"title","itemLabel":"Title"},{"itemValue":"count","itemLabel":"Count"},{"itemValue":"description","itemLabel":"Description/Excerpt"},{"itemValue":"button","itemLabel":"Button"}],"pName":"gutentor/t1","termStyle":"gtf-list","t1Taxonomy":"product_cat","tBtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"tFImgOC":{"enable":false,"normal":""},"t2ContentP":{"mTop":"","mRight":"","mBottom":"","mLeft":""},"tBxAlign":{"desktop":"","tablet":"","mobile":""},"tBxM":{"type":"px","mTop":"","mBottom":""},"tBxP":{"type":"px","dTop":"15","dBottom":"15","tTop":"15","tBottom":"15","mTop":"15","mBottom":"15"},"tCountOpt":{"display":"sorting","prefix":"","suffix":" Products"}} /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->

        <!-- wp:group {"className":"information-banner-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":123,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/truck.png" alt="" class="has-border-color wp-image-123" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Free Delivery','kids-toys-store').'</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:14px">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":136,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/support.png" alt="" class="has-border-color wp-image-136" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Online Support','kids-toys-store').'</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
        <p class="has-primary-color has-text-color has-link-color has-extra-small-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":134,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/return.png" alt="" class="has-border-color wp-image-134" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Money Return','kids-toys-store').'</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
        <p class="has-primary-color has-text-color has-link-color has-extra-small-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":135,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/satisfaction.png" alt="" class="has-border-color wp-image-135" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('100% Satisfaction','kids-toys-store').'</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
        <p class="has-primary-color has-text-color has-link-color has-extra-small-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"marquee-wrap","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group marquee-wrap has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"className":"marquee-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group marquee-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
    );

} else {

    return array(
        'title'      =>__( 'Banner', 'kids-toys-store' ),
        'categories' => array( 'kids-toys-store' ),
        'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"dimensions":{"minHeight":"600px"}},"backgroundColor":"fifthaccent","layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
        <div class="wp-block-group has-fifthaccent-background-color has-background" style="min-height:600px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"className":"slider-category-col","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":{"top":"0","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns slider-category-col" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"70%","className":"banner-col-left wow zoomInLeft","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-column banner-col-left wow zoomInLeft" style="flex-basis:70%"><!-- wp:group {"className":"owl-main-slider owl-carousel","style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group owl-main-slider owl-carousel"><!-- wp:group {"className":"main-slider01","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"500px"}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group main-slider01 has-accent-background-color has-background" style="border-radius:10px;min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"main-slider-col01","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center main-slider-col01" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"poppins"} -->
        <p class="has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size">'. esc_html__('Best Seller Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background"} -->
        <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:40px">'. esc_html__('Find The Best Toys For Your Kids','kids-toys-store').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"6px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('Book Now','kids-toys-store').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"50%","className":"main-slider-col02"} -->
        <div class="wp-block-column main-slider-col02" style="flex-basis:50%"><!-- wp:image {"id":29,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner01.png" alt="" class="wp-image-29" style="object-fit:contain"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"main-slider02","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"500px"}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group main-slider02 has-accent-background-color has-background" style="border-radius:10px;min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"main-slider-col01","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center main-slider-col01" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"poppins"} -->
        <p class="has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size">'. esc_html__('Best Seller Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background"} -->
        <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:40px">'. esc_html__('Find The Best Toys For Your Kids','kids-toys-store').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"6px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('Book Now','kids-toys-store').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"50%","className":"main-slider-col02"} -->
        <div class="wp-block-column main-slider-col02" style="flex-basis:50%"><!-- wp:image {"id":30,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner02.png" alt="" class="wp-image-30" style="object-fit:contain"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"main-slider03","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"500px"}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group main-slider03 has-accent-background-color has-background" style="border-radius:10px;min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"main-slider-col02","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center main-slider-col02" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"poppins"} -->
        <p class="has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size">'. esc_html__('Best Seller Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background"} -->
        <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:40px">'. esc_html__('Find The Best Toys For Your Kids','kids-toys-store').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secaccent","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"6px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('Book Now','kids-toys-store').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":31,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner03.png" alt="" class="wp-image-31" style="object-fit:contain"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"30%","className":"banner-right-col wow zoomInRight","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-column banner-right-col wow zoomInRight has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:30%"><!-- wp:group {"className":"banner-right-col-01","layout":{"type":"constrained"}} -->
        <div class="wp-block-group banner-right-col-01"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontSize":"normal","fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-poppins-font-family has-normal-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700">'. esc_html__('Product Categories','kids-toys-store').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:group {"className":"dynamic-product-category static-product-category","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group dynamic-product-category static-product-category"><!-- wp:group {"className":"static-category-group","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"6px"}},"layout":{"type":"constrained","contentSize":"%"}} -->
        <div class="wp-block-group static-category-group" style="border-radius:6px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"static-category-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group static-category-row"><!-- wp:image {"id":156,"sizeSlug":"full","linkDestination":"none","className":"static-category-image"} -->
        <figure class="wp-block-image size-full static-category-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/pro-cat01.png" alt="" class="wp-image-156"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family" style="font-size:15px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Action Figures','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>'. esc_html__('05 Products','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"static-category-group","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"6px"}},"layout":{"type":"constrained","contentSize":"%"}} -->
        <div class="wp-block-group static-category-group" style="border-radius:6px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"static-category-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group static-category-row"><!-- wp:image {"id":158,"sizeSlug":"full","linkDestination":"none","className":"static-category-image"} -->
        <figure class="wp-block-image size-full static-category-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/pro-cat03.png" alt="" class="wp-image-158"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family" style="font-size:15px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Games & Puzzles','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>'. esc_html__('03 Products','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"static-category-group","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"6px"}},"layout":{"type":"constrained","contentSize":"%"}} -->
        <div class="wp-block-group static-category-group" style="border-radius:6px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"static-category-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group static-category-row"><!-- wp:image {"id":157,"sizeSlug":"full","linkDestination":"none","className":"static-category-image"} -->
        <figure class="wp-block-image size-full static-category-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/pro-cat02.png" alt="" class="wp-image-157"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family" style="font-size:15px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Educational Toys','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>'. esc_html__('02 Products','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"static-category-group","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"6px"}},"layout":{"type":"constrained","contentSize":"%"}} -->
        <div class="wp-block-group static-category-group" style="border-radius:6px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"static-category-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group static-category-row"><!-- wp:image {"id":159,"sizeSlug":"full","linkDestination":"none","className":"static-category-image"} -->
        <figure class="wp-block-image size-full static-category-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/pro-cat04.png" alt="" class="wp-image-159"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family" style="font-size:15px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Kids Dolls Toys','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>'. esc_html__('05 Products','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"static-category-group","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"6px"}},"layout":{"type":"constrained","contentSize":"%"}} -->
        <div class="wp-block-group static-category-group" style="border-radius:6px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"static-category-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group static-category-row"><!-- wp:image {"id":158,"sizeSlug":"full","linkDestination":"none","className":"static-category-image"} -->
        <figure class="wp-block-image size-full static-category-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/pro-cat03.png" alt="" class="wp-image-158"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family" style="font-size:15px;font-style:normal;font-weight:600">'. esc_html__('Games & Puzzles','kids-toys-store').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>'. esc_html__('02 Products','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"static-category-group","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"6px"}},"layout":{"type":"constrained","contentSize":"%"}} -->
        <div class="wp-block-group static-category-group" style="border-radius:6px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"static-category-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group static-category-row"><!-- wp:image {"id":159,"sizeSlug":"full","linkDestination":"none","className":"static-category-image"} -->
        <figure class="wp-block-image size-full static-category-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/pro-cat04.png" alt="" class="wp-image-159"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family" style="font-size:15px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Kids Dolls Toys','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>'. esc_html__('01 Products','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:group {"className":"information-banner-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":123,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/truck.png" alt="" class="has-border-color wp-image-123" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Free Delivery','kids-toys-store').'</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:14px">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":136,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/support.png" alt="" class="has-border-color wp-image-136" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Online Support','kids-toys-store').'</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
        <p class="has-primary-color has-text-color has-link-color has-extra-small-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":134,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/return.png" alt="" class="has-border-color wp-image-134" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Money Return','kids-toys-store').'</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
        <p class="has-primary-color has-text-color has-link-color has-extra-small-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"information-banner-section01","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-section01"><!-- wp:group {"className":"information-banner-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group information-banner-row"><!-- wp:image {"id":135,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-default information-banner-image","style":{"border":{"color":"#ffffff00"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default information-banner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/satisfaction.png" alt="" class="has-border-color wp-image-135" style="border-color:#ffffff00;object-fit:contain;width:50px;height:50px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"className":"information-banner-row-content","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group information-banner-row-content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"28px"}}} -->
        <h1 class="wp-block-heading" style="font-size:28px">'. esc_html__('Best Seller Product','kids-toys-store').'</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small"} -->
        <p class="has-primary-color has-text-color has-link-color has-extra-small-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"marquee-wrap","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group marquee-wrap has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"className":"marquee-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group marquee-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"marque-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small"} -->
        <p class="marque-para has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><img class="wp-image-143" style="width: 12px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/para-star.png" alt="">'. esc_html__(' Enjoy an Instant 25% Off On All Itemes','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
    );

}  