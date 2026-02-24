<?php
/**
 * About Us Section
 * 
 * slug: kids-toys-store/about-us-section
 * title: About Us Section
 * categories: kids-toys-store
 */

    return array(
        'title'      =>__( 'About Us Section', 'kids-toys-store' ),
        'categories' => array( 'kids-toys-store' ),
        'content'    => '<!-- wp:group {"className":"about-us-section","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div id="aboutus" class="wp-block-group about-us-section"><!-- wp:cover {"dimRatio":20,"overlayColor":"accent","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained","contentSize":"80%"}} -->
        <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"about-us-col01 wow zoomInLeft"} -->
        <div class="wp-block-column is-vertically-aligned-center about-us-col01 wow zoomInLeft"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none","className":"about-img01","style":{"border":{"radius":"10px"}}} -->
        <figure class="wp-block-image size-full has-custom-border about-img01"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about01.png" alt="" class="wp-image-11" style="border-radius:10px"/></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","align":"right","className":"about-img02","style":{"border":{"radius":"10px"}}} -->
        <figure class="wp-block-image alignright size-full has-custom-border about-img02"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about02.png" alt="" class="wp-image-10" style="border-radius:10px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none","className":"about-img03","style":{"border":{"radius":"10px"}}} -->
        <figure class="wp-block-image size-full has-custom-border about-img03"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about03.png" alt="" class="wp-image-9" style="border-radius:10px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"about-us-col02 wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
        <div class="wp-block-column is-vertically-aligned-center about-us-col02 wow zoomInRight"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"17px"}},"textColor":"accent","fontFamily":"poppins"} -->
        <p class="has-accent-color has-text-color has-link-color has-poppins-font-family" style="font-size:17px;font-style:normal;font-weight:400">'. esc_html__('About Us','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"className":"about-us-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"32px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
        <h2 class="wp-block-heading about-us-heading has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="font-size:32px;font-style:normal;font-weight:100;text-transform:capitalize">'. esc_html__('We want to give you the best services','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.6"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.6">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','kids-toys-store').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"about-col02-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns about-col02-list" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column"><!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon01.png" alt="" class="wp-image-8"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"20px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:100;text-transform:capitalize">'. esc_html__('Guaranteed Results','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small","fontFamily":"poppins"} -->
        <p class="has-primary-color has-text-color has-link-color has-poppins-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.7">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column"><!-- wp:image {"id":7,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon02.png" alt="" class="wp-image-7"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"20px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:100;text-transform:capitalize">'. esc_html__('Quality Services','kids-toys-store').'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"extra-small","fontFamily":"rubik"} -->
        <p class="has-primary-color has-text-color has-link-color has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.7">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','kids-toys-store').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->

        <!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:group -->',
    );