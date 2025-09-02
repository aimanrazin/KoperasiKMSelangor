<?php

/**
 * Title: Services Block
 * Slug: reshape-block/services-block
 * Categories: reshape-block-patterns
 */
$reshape_block_url = trailingslashit(get_stylesheet_directory_uri());
$reshape_block_images = array(
    $reshape_block_url . 'assets/images/service_1.jpg',
    $reshape_block_url . 'assets/images/service_2.jpg',
    $reshape_block_url . 'assets/images/service_3.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__('Wide Range of Services Tailored to Meet Your Needs', 'reshape-block') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"10px"}}}} -->
        <div class="wp-block-column" style="padding-top:10px"><!-- wp:paragraph -->
            <p><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'reshape-block') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"34px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:34px"><!-- wp:button {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"16px","bottom":"16px"}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:16px;padding-bottom:16px"><?php echo esc_html__('Discover More', 'reshape-block') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"50px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"full","id":419,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url($reshape_block_images[0]) ?>" alt="" class="wp-image-419" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <h4 class="wp-block-heading" style="margin-top:32px"><?php echo esc_html__('Branding Strategy', 'reshape-block') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><?php echo esc_html__('Read More', 'reshape-block') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"full","id":420,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url($reshape_block_images[1]) ?>" alt="" class="wp-image-420" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <h4 class="wp-block-heading" style="margin-top:32px"><?php echo esc_html__('Ideas &amp; Research', 'reshape-block') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><?php echo esc_html__('Read More', 'reshape-block') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"full","id":421,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url($reshape_block_images[2]) ?>" alt="" class="wp-image-421" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <h4 class="wp-block-heading" style="margin-top:32px"><?php echo esc_html__('Leadership', 'reshape-block') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><?php echo esc_html__('Read More', 'reshape-block') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->