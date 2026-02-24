<?php
/**
 * News Section
 * 
 * slug: kids-toys-store/news-section
 * title: News Section
 * categories: kids-toys-store
 */

    return array(
        'title'      =>__( 'News Section', 'kids-toys-store' ),
        'categories' => array( 'kids-toys-store' ),
        'content'    => '<!-- wp:group {"className":"news-section wow bounceIn","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div id="blog" class="wp-block-group news-section wow bounceIn has-background-background-color has-background" style="padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"35px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"caveat-brush"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-caveat-brush-font-family" style="font-size:35px;font-style:normal;font-weight:100">'. esc_html__('News & Blogs','kids-toys-store').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:query {"queryId":15,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"layout":{"type":"default"}} -->
    <div class="wp-block-query"><!-- wp:post-template {"className":"news-post-template","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
    <!-- wp:group {"className":"news-image","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group news-image"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} /-->
    
    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"300px","align":"wide"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"news-info","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group news-info" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.7"}},"textColor":"primary","fontSize":"upper-heading"} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group"><!-- wp:comments {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-comments" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:comments-title {"showPostTitle":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
    <!-- /wp:comments -->
    
    <!-- wp:post-date {"format":"j/n/Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"102px"} -->
    <div style="height:102px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
    );