<?php

/**
 * Title: CTA Block
 * Slug: reshape-block/cta-block
 * Categories: reshape-block-patterns
 */
$reshape_block_url = trailingslashit(get_stylesheet_directory_uri());
$reshape_block_images = array(
    $reshape_block_url . 'assets/images/cta_bg.jpg'
);
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($reshape_block_images[0]) ?>","id":473,"dimRatio":90,"overlayColor":"primary","minHeight":540,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-473" alt="" src="<?php echo esc_url($reshape_block_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxx-large"} -->
                <h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html__('Ready to Elevate Your Online Performance?', 'reshape-block') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"medium"} -->
                <p class="has-text-align-center has-medium-font-size" style="line-height:1.5"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'reshape-block') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"42px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:42px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}},"typography":{"fontSize":"18px"},"border":{"width":"2px"}},"borderColor":"foregound-alt","className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color has-foregound-alt-border-color wp-element-button" style="border-width:2px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php echo esc_html__('Schedule an Appointment', 'reshape-block') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->