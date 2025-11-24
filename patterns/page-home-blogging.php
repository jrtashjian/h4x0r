<?php
/**
 * Title: Blogging Home
 * Slug: h4x0r/page-home-blogging
 * Post Types: page, wp_template
 * Description: A blogging home page template for the h4x0r theme.
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="https://pd.w.org/2024/08/36166c4cb9b3b2121.21644489-2048x1365.jpeg" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Initializing personal blog... Loading thoughts on code, security, and digital culture. Welcome to the matrix of my mind. Posts range from technical deep dives to creative explorations in the realm of bits and bytes.', 'h4x0r');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'This site uses the %1$sh4x0r theme%2$s, featuring a retro terminal aesthetic with CRT screen effects, multiple color palettes, and monospace typography for that authentic hacker vibe.', 'h4x0r' ), '<a href="' . esc_url( 'https://wordpress.org/themes/h4x0r' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('The Blog', 'h4x0r');?></h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"100","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:post-title {"isLink":true,"className":"nowrap","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
