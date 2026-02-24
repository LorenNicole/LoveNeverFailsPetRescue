<?php
/**
 * Product Section
 * 
 * slug: kids-toys-store/product-section
 * title: Product Section
 * categories: kids-toys-store
 */
$kids_toys_store_store_plugins_list = get_option( 'active_plugins' );
$kids_toys_store_store_plugin = 'woocommerce/woocommerce.php';
$kids_toys_store_store_results = in_array( $kids_toys_store_store_plugin , $kids_toys_store_store_plugins_list);
if ( $kids_toys_store_store_results )  {

    return array(
        'title'      =>__( 'Product Section', 'kids-toys-store' ),
        'categories' => array( 'kids-toys-store' ),
        'content'    => '<!-- wp:group {"className":"toy-store-dynamic-product-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
        <div class="wp-block-group toy-store-dynamic-product-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:spacer {"height":"35px"} -->
        <div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"35px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-bottom:var(--wp--preset--spacing--60);font-size:35px">'. esc_html__('Trending Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":8,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"dynamic-product-section"} -->
        <div class="wp-block-woocommerce-product-collection dynamic-product-section"><!-- wp:woocommerce/product-template {"className":"product-template-section  owl-carousel-static-product owl-carousel wow zoomIn"} -->
        <!-- wp:group {"className":"stack-img-cart","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group stack-img-cart"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} /-->

        <!-- wp:columns {"className":"cart-wishlist-button"} -->
        <div class="wp-block-columns cart-wishlist-button"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true} /--></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->

        <!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"3px"}}},"textColor":"primary","fontFamily":"poppins"} /-->

        <!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"3px","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"17px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"poppins","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"primary","fontSize":"medium","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

        <!-- wp:woocommerce/all-reviews {"reviewsOnPageLoad":5,"showLoadMore":false,"showOrderby":false,"showReviewDate":false,"showReviewerName":false,"showReviewImage":false,"showReviewContent":false,"showProductName":false} -->
        <div class="wp-block-woocommerce-all-reviews wc-block-all-reviews has-rating" data-image-type="reviewer" data-orderby="most-recent" data-reviews-on-page-load="5" data-reviews-on-load-more="10" data-show-load-more="false" data-show-orderby="false"></div>
        <!-- /wp:woocommerce/all-reviews --></div>
        <!-- /wp:group -->
        <!-- /wp:woocommerce/product-template --></div>
        <!-- /wp:woocommerce/product-collection -->

        <!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div>
        <!-- /wp:group -->',
    );

} else {    

    return array(
        'title'      =>__( 'Product Section', 'kids-toys-store' ),
        'categories' => array( 'kids-toys-store' ),
        'content'    => '<!-- wp:group {"className":"toy-store-static-product-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
        <div class="wp-block-group toy-store-static-product-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:spacer {"height":"35px"} -->
        <div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"35px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-bottom:var(--wp--preset--spacing--60);font-size:35px">'. esc_html__('Trending Product','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"static-product-group owl-carousel owl-carousel-static-product wow zoomIn","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group static-product-group owl-carousel owl-carousel-static-product wow zoomIn"><!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product01.png" alt="" class="wp-image-10"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Our Core Services','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":36,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product02.png" alt="" class="wp-image-36"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":37,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product03.png" alt="" class="wp-image-37"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":38,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product04.png" alt="" class="wp-image-38"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":39,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product05.png" alt="" class="wp-image-39"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":36,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product02.png" alt="" class="wp-image-36"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product01.png" alt="" class="wp-image-10"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":37,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product03.png" alt="" class="wp-image-37"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":39,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product05.png" alt="" class="wp-image-39"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"product-static-col","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-col" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"static-product-image","backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group static-product-image has-background-background-color has-background"><!-- wp:image {"id":38,"sizeSlug":"full","linkDestination":"none","align":"center","className":"static-product-image"} -->
        <figure class="wp-block-image aligncenter size-full static-product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product04.png" alt="" class="wp-image-38"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Product Category','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontFamily":"poppins"} -->
        <h2 class="wp-block-heading has-poppins-font-family"><a href="#">'. esc_html__('Product Name Here','kids-toys-store').'</a></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:700">'. esc_html__('$29.99','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"line-through","fontSize":"14px"},"elements":{"link":{"color":{"text":"#00000082"}}},"color":{"text":"#00000082"}}} -->
        <p class="has-text-color has-link-color" style="color:#00000082;font-size:14px;font-style:normal;font-weight:500;text-decoration:line-through">'. esc_html__('$32.00','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><img class="wp-image-14" style="width: 18px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/star.png" alt="">'. esc_html__(' (4.0)','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div>
        <!-- /wp:group -->',
    );

} 