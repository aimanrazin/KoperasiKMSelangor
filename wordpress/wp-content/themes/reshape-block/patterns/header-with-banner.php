<?php

/**
 * Title: Header with Banner
 * Slug: reshape-block/header-with-banner
 * Categories: reshape-block-patterns
 */
$reshape_block_url = trailingslashit(get_stylesheet_directory_uri());
$reshape_block_images = array(
    $reshape_block_url . 'assets/images/banner_image.jpg'
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($reshape_block_images[0]) ?>","id":815,"dimRatio":30,"minHeight":600,"gradient":"first-primary-gradient","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim wp-block-cover__gradient-background has-background-gradient has-first-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-815" alt="" src="<?php echo esc_url($reshape_block_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|50","bottom":"20px","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:site-title {"level":3,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"2px","textTransform":"uppercase","lineHeight":"1.1"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"medium","fontFamily":"plus-jakarta-sans"} /-->

                <!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"background-alt","overlayTextColor":"sub-heading-color","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"dimensions":{"minHeight":"560px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
            <div class="wp-block-group" style="min-height:560px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1080px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"74px","lineHeight":"1.5"}}} -->
                    <h2 class="wp-block-heading has-text-align-center" style="font-size:74px;line-height:1.5"><?php echo esc_html__('Digital Conquest: Unleashing the Power of Ideas', 'reshape-block') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                    <p class="has-text-align-center has-medium-font-size"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'reshape-block') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"52px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:52px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"spacing":{"padding":{"top":"17px","bottom":"17px"}},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:17px;padding-bottom:17px"><?php echo esc_html__('Get Started', 'reshape-block') ?></a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"transparent","textColor":"foregound-alt","style":{"typography":{"fontSize":"18px"},"border":{"width":"2px"},"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"borderColor":"foregound-alt","className":"is-style-button-hover-primary-bgcolor"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-transparent-background-color has-text-color has-background has-border-color has-foregound-alt-border-color wp-element-button" style="border-width:2px;padding-top:15px;padding-bottom:15px"><?php echo esc_html__('Schedule Appointment', 'reshape-block') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->