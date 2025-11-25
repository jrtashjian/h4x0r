<?php
/**
 * Title: post-comments
 * Slug: h4x0r/post-comments
 * Inserter: no
 */
?>
<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:comments-title {"showPostTitle":false,"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:avatar {"size":40,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"linkTarget":"_blank","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fill","flexSize":null}}} /-->

<!-- wp:comment-date {"isLink":false,"style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|midtone"}}}},"textColor":"midtone"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:comment-reply-link /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<!-- wp:comments-pagination-previous {"label":"Older Comments"} /-->

<!-- wp:comments-pagination-next {"label":"Newer Comments"} /-->
<!-- /wp:comments-pagination --></div>
<!-- /wp:group -->

<!-- wp:omniform/form {"form_type":"custom","submit_action":"{{get_site_url}}/wp-comments-post.php","submit_method":"POST"} -->
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:omniform/post-comments-form-title /-->

<!-- wp:omniform/post-comments-form-cancel-reply-link /--></div>
<!-- /wp:group -->

<!-- wp:omniform/conditional-group {"callback":"{{omniform_open_for_comments}}"} -->
<!-- wp:omniform/conditional-group {"callback":"{{is_user_logged_in}}"} -->
<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Logged in as {{omniform_current_user_display_name}}. %1$sEdit your profile%2$s. %3$sLog out?%4$s Required fields are marked *', 'h4x0r' ), '<a href="' . esc_url( '{{get_edit_user_link}}' ) . '">', '</a>', '<a href="' . esc_url( '{{omniform_comment_logout_url}' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:omniform/conditional-group -->

<!-- wp:omniform/conditional-group {"callback":"{{is_user_logged_in}}","reverseCondition":true} -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Your email address will not be published. Required fields are marked *', 'h4x0r');?></p>
<!-- /wp:paragraph -->
<!-- /wp:omniform/conditional-group -->

<!-- wp:omniform/field {"fieldLabel":"Comment","fieldName":"comment","isRequired":true} -->
<!-- wp:omniform/label /-->

<!-- wp:omniform/textarea {"fieldValue":""} /-->
<!-- /wp:omniform/field -->

<!-- wp:omniform/conditional-group {"callback":"{{is_user_logged_in}}","reverseCondition":true} -->
<!-- wp:omniform/field {"fieldLabel":"Name","fieldName":"author","isRequired":true} -->
<!-- wp:omniform/label /-->

<!-- wp:omniform/input {"fieldValue":"{{omniform_current_commenter_author}}"} /-->
<!-- /wp:omniform/field -->

<!-- wp:omniform/field {"fieldLabel":"Email","fieldName":"email","isRequired":true} -->
<!-- wp:omniform/label /-->

<!-- wp:omniform/input {"fieldValue":"{{omniform_current_commenter_email}}"} /-->
<!-- /wp:omniform/field -->

<!-- wp:omniform/field {"fieldLabel":"Website","fieldName":"url","isRequired":false} -->
<!-- wp:omniform/label /-->

<!-- wp:omniform/input {"fieldValue":"{{omniform_current_commenter_url}}"} /-->
<!-- /wp:omniform/field -->

<!-- wp:omniform/conditional-group {"callback":"{{omniform_comment_cookies_opt_in}}"} -->
<!-- wp:omniform/field {"fieldLabel":"Save my name, email, and website in this browser for the next time I comment.","fieldName":"wp-comment-cookies-consent","isRequired":false,"className":"is-style-inline"} -->
<!-- wp:omniform/input {"fieldType":"checkbox","fieldValue":"{{omniform_current_commenter_author}}"} /-->

<!-- wp:omniform/label /-->
<!-- /wp:omniform/field -->
<!-- /wp:omniform/conditional-group -->
<!-- /wp:omniform/conditional-group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:omniform/button {"buttonType":"submit","buttonLabel":"Post Comment"} /--></div>
<!-- /wp:group -->
<!-- /wp:omniform/conditional-group -->

<!-- wp:omniform/conditional-group {"callback":"{{omniform_closed_for_comments}}"} -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Comments are closed.', 'h4x0r');?></p>
<!-- /wp:paragraph -->
<!-- /wp:omniform/conditional-group -->

<!-- wp:omniform/conditional-group {"callback":"{{omniform_comment_login_required}}"} -->
<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a comment.', 'h4x0r' ), '<a href="' . esc_url( '{{omniform_comment_login_url}}' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:omniform/conditional-group --></div>
<!-- /wp:group -->
<!-- /wp:omniform/form --></div>
<!-- /wp:comments -->