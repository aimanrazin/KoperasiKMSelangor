<?php

/**
 * Title: Team Block
 * Slug: reshape-block/team-block
 * Categories: reshape-block-patterns
 */
$reshape_block_url = trailingslashit(get_stylesheet_directory_uri());
$reshape_block_images = array(
    $reshape_block_url . 'assets/images/team_1.jpg',
    $reshape_block_url . 'assets/images/team_2.jpg',
    $reshape_block_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"840px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="line-height:1.5"><?php echo esc_html__('Introducing the Extraordinary Individuals Who Comprise Our Team of Experts', 'reshape-block') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"50px"},"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-block-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-block-member"><!-- wp:image {"id":459,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[0]) ?>" alt="" class="wp-image-459" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"reshape-team-overlay-content","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group reshape-team-overlay-content"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"foregound-alt"} -->
                    <h5 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color"><?php echo esc_html__('Mathew Patt', 'reshape-block') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","textColor":"background-alt","fontSize":"x-small"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-x-small-font-size"><?php echo esc_html__('Founder - Patt Technologies', 'reshape-block') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"15px"}}}} -->
                    <ul class="wp-block-social-links" style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"behance"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-block-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-block-member"><!-- wp:image {"id":466,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[1]) ?>" alt="" class="wp-image-466" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"reshape-team-overlay-content","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group reshape-team-overlay-content"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"foregound-alt"} -->
                    <h5 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color"><?php echo esc_html__('Melinda C', 'reshape-block') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","textColor":"background-alt","fontSize":"x-small"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-x-small-font-size"><?php echo esc_html__('CTO - Patt Technologies', 'reshape-block') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"15px"}}}} -->
                    <ul class="wp-block-social-links" style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"behance"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-block-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-block-member"><!-- wp:image {"id":467,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[2]) ?>" alt="" class="wp-image-467" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"reshape-team-overlay-content","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group reshape-team-overlay-content"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"foregound-alt"} -->
                    <h5 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color"><?php echo esc_html__('Alexander Lyn', 'reshape-block') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","textColor":"background-alt","fontSize":"x-small"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-x-small-font-size"><?php echo esc_html__('CFO - Patt Technologies', 'reshape-block') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"15px"}}}} -->
                    <ul class="wp-block-social-links" style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"behance"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                    </ul>
                    <!-- /wp:social-links -->
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