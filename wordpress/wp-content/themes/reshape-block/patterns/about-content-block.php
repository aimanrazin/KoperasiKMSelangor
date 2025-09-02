<?php

/**
 * Title: About/Content Block
 * Slug: reshape-block/about-content-block
 * Categories: reshape-block-patterns
 */
$reshape_block_url = trailingslashit(get_stylesheet_directory_uri());
$reshape_block_images = array(
    $reshape_block_url . 'assets/images/about_1.jpg',
    $reshape_block_url . 'assets/images/about_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"53.7%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:53.7%"><!-- wp:cover {"url":"<?php echo esc_url($reshape_block_images[0]) ?>","id":546,"dimRatio":0,"minHeight":580,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-546" alt="" src="<?php echo esc_url($reshape_block_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"60px","right":"60px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:60px;padding-bottom:20px;padding-left:60px;flex-basis:45%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__('Delivering Top-Notch Service for a Decade', 'reshape-block') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foregound-alt"} -->
            <p class="has-text-align-center has-foregound-alt-color has-text-color" style="line-height:1.5"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'reshape-block') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"42px","bottom":"0"}}}} -->
            <div class="wp-block-buttons" style="margin-top:42px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","style":{"border":{"radius":"5px","width":"2px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"16px","bottom":"16px"}}},"borderColor":"foregound-alt","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color has-foregound-alt-border-color wp-element-button" style="border-width:2px;border-radius:5px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px"><?php echo esc_html__('Discover More', 'reshape-block') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"60px","right":"60px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:60px;padding-bottom:20px;padding-left:60px;flex-basis:45%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__('A Legacy of Excellence: Our Decade-Long Mission and Goals', 'reshape-block') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foregound-alt"} -->
            <p class="has-text-align-center has-foregound-alt-color has-text-color" style="line-height:1.5"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'reshape-block') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"42px","bottom":"0"}}}} -->
            <div class="wp-block-buttons" style="margin-top:42px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","style":{"border":{"radius":"5px","width":"2px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"16px","bottom":"16px"}}},"borderColor":"foregound-alt","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color has-foregound-alt-border-color wp-element-button" style="border-width:2px;border-radius:5px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px"><?php echo esc_html__('Discover More', 'reshape-block') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"53.7%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:53.7%"><!-- wp:cover {"url":"<?php echo esc_url($reshape_block_images[1]) ?>","id":686,"dimRatio":0,"minHeight":580,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-686" alt="" src="<?php echo esc_url($reshape_block_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->