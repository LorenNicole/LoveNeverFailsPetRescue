<?php
/**
 * Testimonials Section
 * 
 * slug: kids-toys-store-child/testimonials-section
 * title: Testimonials Section
 * categories: kids-toys-store-child
 */

return array(
    'title'      =>__( 'Testimonials Section', 'kids-toys-store' ),
    'categories' => array( 'kids-toys-store' ),
    'content'    => '<!-- wp:group {"className":"testimonials-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group testimonials-section has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"accent","fontSize":"medium","fontFamily":"poppins"} -->
    <p class="has-text-align-center has-accent-color has-text-color has-link-color has-poppins-font-family has-medium-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Testimonials','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"35px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:35px;font-style:normal;font-weight:100">'. esc_html__('What Say Clients','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"test-prev-next"} -->
    <div class="wp-block-columns test-prev-next"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"className":"swiper-test-button","style":{"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-buttons swiper-test-button"><!-- wp:button {"backgroundColor":"sixthaccent","className":"testimonial-swiper-button-prev","style":{"spacing":{"padding":{"left":"15px","right":"17px","top":"12px","bottom":"10px"}},"border":{"radius":"26px"},"typography":{"lineHeight":"1.3"}}} -->
    <div class="wp-block-button testimonial-swiper-button-prev"><a class="wp-block-button__link has-sixthaccent-background-color has-background wp-element-button" style="border-radius:26px;padding-top:12px;padding-right:17px;padding-bottom:10px;padding-left:15px;line-height:1.3"><img class="wp-image-132" style="width: 8px;" src="'.esc_url(get_stylesheet_directory_uri()) .'/assets/images/prev.png" alt=""></a></div>
    <!-- /wp:button -->

    <!-- wp:button {"backgroundColor":"sixthaccent","className":"testimonial-swiper-button-next","style":{"spacing":{"padding":{"left":"14px","right":"10px","top":"13px","bottom":"10px"}},"border":{"radius":"26px"},"typography":{"lineHeight":"1.1"}}} -->
    <div class="wp-block-button testimonial-swiper-button-next"><a class="wp-block-button__link has-sixthaccent-background-color has-background wp-element-button" style="border-radius:26px;padding-top:13px;padding-right:10px;padding-bottom:10px;padding-left:14px;line-height:1.1"><img class="wp-image-131" style="width: 16px;" src="'.esc_url(get_stylesheet_directory_uri()) .'/assets/images/next.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:group {"className":"testimonial-swiper-slider mySwiper","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group testimonial-swiper-slider mySwiper" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"testimonials-slider swiper-wrapper","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
    <div class="wp-block-group testimonials-slider swiper-wrapper" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials-slider-block swiper-slide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-tiny-font-size" style="font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"23px"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center testimonial-author-name has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-size:23px;font-style:normal;font-weight:100">'. esc_html__('Jean Kalvin','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:400">'. esc_html__('Manager','kids-toys-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials-slider-block swiper-slide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-tiny-font-size" style="font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"23px"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center testimonial-author-name has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-size:23px;font-style:normal;font-weight:100">'. esc_html__('Alex Morgan','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:400">'. esc_html__('CEO','kids-toys-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials-slider-block swiper-slide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-tiny-font-size" style="font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"23px"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center testimonial-author-name has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-size:23px;font-style:normal;font-weight:100">'. esc_html__('Jordan Blake','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:400">'. esc_html__('Director','kids-toys-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials-slider-block swiper-slide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-tiny-font-size" style="font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"23px"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center testimonial-author-name has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-size:23px;font-style:normal;font-weight:100">'. esc_html__('Taylor Reed','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:400">'. esc_html__('Product Manager','kids-toys-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials-slider-block swiper-slide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-tiny-font-size" style="font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"23px"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center testimonial-author-name has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-size:23px;font-style:normal;font-weight:100">'. esc_html__('Alex Reed','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:400">'. esc_html__('Operations Manager','kids-toys-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials-slider-block swiper-slide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.8","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-tiny-font-size" style="font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','kids-toys-store').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"23px"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center testimonial-author-name has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-size:23px;font-style:normal;font-weight:100">'. esc_html__('Nikita Kalvin','kids-toys-store').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:400">'. esc_html__('CEO','kids-toys-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"65px"} -->
    <div style="height:65px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
);