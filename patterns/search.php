<?php
/**
 * Title: search
 * Slug: h4x0r/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:omniform/form {"form_type":"custom","submit_action":"{{get_site_url}}","submit_method":"GET"} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":0,"bottom":0},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal","verticalAlignment":"bottom"}} -->
<div class="wp-block-group">
<!-- wp:omniform/field {"fieldLabel":"Search","fieldName":"s","style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<!-- wp:omniform/input {"fieldType":"search","fieldPlaceholder":"Search"} /-->
<!-- /wp:omniform/field -->
<!-- wp:omniform/button {"buttonType":"submit","buttonLabel":"Search","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"width":"2px"}},"borderColor":"contrast"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:omniform/form --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('No posts were found.', 'h4x0r');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->