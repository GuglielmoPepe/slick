<?php
/**
 * Title: Query loop
 * Slug: slick/query-loop
 * Categories: generic
 */
?>

    <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
    <div class="wp-block-query">

        <!-- wp:post-template -->

            <!-- wp:columns {"verticalAlignment":null} -->
            <div class="wp-block-columns">

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
                    <div class="wp-block-group">

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                            <!-- wp:post-featured-image /-->

                        </div>
                        <!-- /wp:group -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"stretch"}} -->
                    <div class="wp-block-group">

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                            <!-- wp:post-date /-->

                            <!-- wp:post-title /-->

                            <!-- wp:post-excerpt {"moreText":"Read more"} /-->

                        </div>
                        <!-- /wp:group -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        <!-- /wp:post-template -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

            <!-- wp:query-pagination -->

                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
            
            <!-- /wp:query-pagination -->

        </div>
        <!-- /wp:group -->

        <!-- wp:query-no-results -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">

                <!-- wp:paragraph -->
                <p>Sorry, but nothing was found. Please try a search with different keywords.</p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        <!-- /wp:query-no-results -->

    </div>
    <!-- /wp:query -->
