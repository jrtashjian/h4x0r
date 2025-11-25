<?php
/**
 * Title: Page Home
 * Slug: h4x0r/page-home
 * Categories: 
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="https://pd.w.org/2024/08/36166c4cb9b3b2121.21644489-2048x1365.jpeg" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Initializing personal blog... Loading thoughts on code, security, and digital culture. Welcome to the matrix of my mind. Posts range from technical deep dives to creative explorations in the realm of bits and bytes.', 'h4x0r');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'This site uses the %1$sh4x0r%2$s theme, originally built for %3$shttps://jrtashjian.com%4$s, with retro terminal aesthetic, CRT effects, color palettes, and monospace fonts.', 'h4x0r' ), '<strong>', '</strong>', '<a href="' . esc_url( 'https://jrtashjian.com' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is a 'br' HTML element, 4. is the start of a 'a' HTML element, 5. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Search and comment forms are powered by %1$sOmniForm%2$s.%3$s%4$sInstall it on the plugins page%5$s.', 'h4x0r' ), '<a href="' . esc_url( 'https://omniform.io' ) . '">', '</a>', '<br>', '<a href="' . esc_url( '/wp-admin/plugin-install.php?s=omniform&tab=search&type=term' ) . '" data-type="link" data-id="/wp-admin/plugin-install.php?s=omniform&tab=search&type=term">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base"} -->
<p class="has-text-align-center has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */ 
echo sprintf( esc_html__( '01100011 01101111 01100100 01100101%1$s01101001 01110011%2$s01110000 01101111 01100101 01110100 01110010 01111001', 'h4x0r' ), '<br>', '<br>' ); ?></p>
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