<?php
/**
 * Title: Part: header
 * Slug: rowanfield/part-header
 * Inserter: no
 *
 * Template part markup lives in a pattern so links use this site's own address.
 */

// Point the menu at the site's "Main menu" (created by the demo setup, editable in Appearance > Editor > Navigation).
$rf_menu = get_posts( array( 'post_type' => 'wp_navigation', 'title' => 'Main menu', 'numberposts' => 1, 'fields' => 'ids', 'post_status' => 'publish' ) );
$rf_ref  = $rf_menu ? '"ref":' . (int) $rf_menu[0] . ',' : '';
?>
<!-- wp:group {"tagName":"div","className":"rf-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group rf-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"rf-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group rf-brand"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {<?php echo $rf_ref; // phpcs:ignore ?>"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

<!-- wp:paragraph {"className":"rf-phone","style":{"typography":{"lineHeight":"1.2"}}} -->
<p class="rf-phone" style="line-height:1.2"><a href="tel:+15550100142">(555) 010-0142</a><small>Open Mon to Sat</small></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"rf-header-btn"} -->
<div class="wp-block-buttons rf-header-btn"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/inquiry/' ) ); ?>">Ask for a hive plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
