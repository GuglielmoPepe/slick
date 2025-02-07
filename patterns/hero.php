<?php
/**
 * Title: Hero
 * Slug: slick/hero
 * Categories: generic
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/16x9.png","dimRatio":50,"overlayColor":"color-10","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh">

    <span aria-hidden="true" class="wp-block-cover__background has-color-10-background-color has-background-dim"></span>
        
    <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/16x9.png" data-object-fit="cover"/>

    <div class="wp-block-cover__inner-container">

        <!-- wp:columns -->
        <div class="wp-block-columns">

            <!-- wp:column -->
            <div class="wp-block-column">

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                <div class="wp-block-group">

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                        <!-- wp:heading {"textAlign":"center"} -->
                        <h2 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit amet</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center"} -->
                        <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo sapien nunc, sit amet mattis urna interdum at. Nam augue nibh, dapibus vel tempus ac, malesuada non neque. Curabitur quis pretium ex.</p>
                        <!-- /wp:paragraph -->
                    
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons">

                            <!-- wp:button {"textAlign":"center"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button">Call to Action</a></div>
                            <!-- /wp:button -->

                        </div>
                        <!-- /wp:buttons -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>

</div>
<!-- /wp:cover -->
