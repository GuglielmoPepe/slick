<?php
/**
 * Title: Hero
 * Slug: slick/hero
 * Categories: generic
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

    <!-- wp:cover {"url":"http://localhost/wordpress/develop/wp-content/uploads/sites/7/2025/01/16x9.png","id":253,"dimRatio":50,"customOverlayColor":"#d8d8d8","isUserOverlayColor":false,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full"} -->
    <div class="wp-block-cover alignfull is-light" style="min-height:100vh">

        <span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#d8d8d8"></span>
        
        <img class="wp-block-cover__image-background wp-image-253" alt="" src="http://localhost/wordpress/develop/wp-content/uploads/sites/7/2025/01/16x9.png" data-object-fit="cover"/>

        <div class="wp-block-cover__inner-container">

            <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide">

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","minimumColumnWidth":"66rem","columnCount":null}} -->
                <div class="wp-block-group">

                    <!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="min-height:100%">

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"blockGap":"var:preset|spacing|l"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="min-height:100%;margin-top:var(--wp--preset--spacing--none);margin-bottom:var(--wp--preset--spacing--none);padding-top:var(--wp--preset--spacing--none);padding-right:0;padding-bottom:var(--wp--preset--spacing--none);padding-left:0">

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l","margin":{"top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"padding":{"right":"var:preset|spacing|l","left":"var:preset|spacing|l","top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--none);margin-bottom:var(--wp--preset--spacing--none);padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                                <!-- wp:heading {"textAlign":"center"} -->
                                <h2 class="wp-block-heading"><?php echo esc_html_x( 'Sample heading. Replace the text with your own heading.', 'sample heading', 'slick' ); ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center"} -->
                                <p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'slick' ); ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                <div class="wp-block-buttons">

                                    <!-- wp:button {"textAlign":"center"} -->
                                    <div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html_x( 'Call to action', 'sample cta', 'slick' ); ?></a></div>
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
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>

    </div>
    <!-- /wp:cover -->

</div>
<!-- /wp:group -->
