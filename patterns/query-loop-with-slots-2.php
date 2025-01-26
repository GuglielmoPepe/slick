<?php
/**
 * Title: Query loop with slots 2
 * Slug: slick/query-loop-with-slots-2
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

                <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
                <div class="wp-block-query">

                    <!-- wp:post-template -->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"blockGap":"var:preset|spacing|l"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="min-height:100%;margin-top:var(--wp--preset--spacing--none);margin-bottom:var(--wp--preset--spacing--none);padding-top:var(--wp--preset--spacing--none);padding-right:0;padding-bottom:var(--wp--preset--spacing--none);padding-left:0">

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l","margin":{"top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"padding":{"right":"var:preset|spacing|l","left":"var:preset|spacing|l","top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--none);margin-bottom:var(--wp--preset--spacing--none);padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                                <!-- wp:post-featured-image /-->

                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l","margin":{"top":"var:preset|spacing|none","bottom":"var:preset|spacing|none"},"padding":{"right":"var:preset|spacing|l","left":"var:preset|spacing|l","top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--none);margin-bottom:var(--wp--preset--spacing--none);padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                                <!-- wp:post-date /-->

                                <!-- wp:post-title /-->

                                <!-- wp:post-excerpt /-->

                            </div>
                            <!-- /wp:group -->

                        </div>
                        <!-- /wp:group -->

                    <!-- /wp:post-template -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|l","left":"var:preset|spacing|l","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--l);padding-bottom:0;padding-left:var(--wp--preset--spacing--l)">

                        <!-- wp:query-pagination -->

                            <!-- wp:query-pagination-previous /-->

                            <!-- wp:query-pagination-numbers /-->

                            <!-- wp:query-pagination-next /-->

                        <!-- /wp:query-pagination -->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|l","left":"var:preset|spacing|l","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--l);padding-bottom:0;padding-left:var(--wp--preset--spacing--l)">

                        <!-- wp:query-no-results -->

                            <!-- wp:paragraph -->
                            <p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'slick' ); ?></p>
                            <!-- /wp:paragraph -->
                        
                        <!-- /wp:query-no-results -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:query -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
