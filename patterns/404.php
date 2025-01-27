<?php
/**
 * Title: 404
 * Slug: slick/404
 * Categories: generic
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

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

                        <!-- wp:heading -->
                        <h2 class="wp-block-heading"><?php echo esc_html_x( 'Oops! That page can’t be found.', '404 error message', 'slick' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html_x( 'It looks like nothing was found at this location. Maybe try a search?', '404 error message', 'slick' ); ?></p>
                        <!-- /wp:paragraph -->

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
<!-- /wp:group -->
