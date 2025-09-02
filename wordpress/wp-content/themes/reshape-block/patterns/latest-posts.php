<?php

/**
 * Title: Latest Posts Block
 * Slug: reshape-block/latest-posts
 * Categories: reshape-block-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__('Checkout Our Recent News &amp; Insights', 'reshape-block') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'reshape-block') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"34px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:34px"><!-- wp:button {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"16px","bottom":"16px"}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:16px;padding-bottom:16px"><?php echo esc_html__('Read All Articles', 'reshape-block') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"60px"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"50px"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
            <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"280px","style":{"border":{"radius":"5px"}}} /-->

                <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"is-style-categories-background-with-round-small","fontSize":"x-small"} /-->

                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30"}},"typography":{"fontSize":"28px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-title-hover-secondary-color"} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
                <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

                    <!-- wp:paragraph -->
                    <p>.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author-name /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->