<?php

/**
 * Title: Testimonial Block
 * Slug: reshape-block/testimonial-block
 * Categories: reshape-block-patterns
 */
$reshape_block_url = trailingslashit(get_stylesheet_directory_uri());
$reshape_block_images = array(
    $reshape_block_url . 'assets/images/fota_testimonial_1.png',
    $reshape_block_url . 'assets/images/fota_testimonial_2.png',
    $reshape_block_url . 'assets/images/fota_testimonial_3.png'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"840px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"textColor":"primary"} -->
        <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color"><?php echo esc_html__('Testimonials', 'reshape-block') ?></h6>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"10px"}}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="margin-top:10px;line-height:1.5"><?php echo esc_html__('Stories of Satisfaction and Success from Our Customers', 'reshape-block') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"50px"},"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"30px","right":"30px"}},"border":{"radius":"6px"}},"backgroundColor":"primary","textColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-color has-primary-background-color has-text-color has-background" style="border-radius:6px;padding-top:25px;padding-right:30px;padding-bottom:25px;padding-left:30px"><!-- wp:paragraph -->
                <p><?php echo esc_html__('WOW, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":491,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($reshape_block_images[0]) ?>" alt="" class="wp-image-491" style="border-radius:50%;object-fit:cover;width:60px;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt"} -->
                        <h6 class="wp-block-heading has-foregound-alt-color has-text-color" style="font-style:normal;font-weight:500"><?php echo esc_html__('Patrick M', 'reshape-block') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><?php echo esc_html__('Author', 'reshape-block') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"30px","right":"30px"}},"border":{"radius":"6px"}},"backgroundColor":"primary","textColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-color has-primary-background-color has-text-color has-background" style="border-radius:6px;padding-top:25px;padding-right:30px;padding-bottom:25px;padding-left:30px"><!-- wp:paragraph -->
                <p><?php echo esc_html__('WOW, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":491,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($reshape_block_images[1]) ?>" alt="" class="wp-image-491" style="border-radius:50%;object-fit:cover;width:60px;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt"} -->
                        <h6 class="wp-block-heading has-foregound-alt-color has-text-color" style="font-style:normal;font-weight:500"><?php echo esc_html__('Melinda Kr', 'reshape-block') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><?php echo esc_html__('Author', 'reshape-block') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"30px","right":"30px"}},"border":{"radius":"6px"}},"backgroundColor":"primary","textColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-color has-primary-background-color has-text-color has-background" style="border-radius:6px;padding-top:25px;padding-right:30px;padding-bottom:25px;padding-left:30px"><!-- wp:paragraph -->
                <p><?php echo esc_html__('WOW, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":491,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($reshape_block_images[2]) ?>" alt="" class="wp-image-491" style="border-radius:50%;object-fit:cover;width:60px;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt"} -->
                        <h6 class="wp-block-heading has-foregound-alt-color has-text-color" style="font-style:normal;font-weight:500"><?php echo esc_html__('Liyana Pett', 'reshape-block') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><?php echo esc_html__('Author', 'reshape-block') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->