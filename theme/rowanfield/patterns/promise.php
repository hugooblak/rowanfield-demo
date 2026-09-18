<?php
/**
 * Title: Promise and terms
 * Slug: rowanfield/promise
 * Categories: rowanfield-sections
 * Description: Dark section with the grading guarantee and the contract terms, to remove the two biggest worries.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-promise is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-promise is-style-section-dark" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Our promise</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A weak hive is our problem, not yours.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Every hive is opened and graded before it leaves our yard. If one lands under the frame count you booked, we swap it or take it off the invoice. You choose which.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li>Frame counts written on the invoice, hive by hive</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No charge for a hive that fails its grade</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You can open any lid with us, any time</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Terms</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Book the bloom, pay across it.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Half on placement, half on collection. Move your dates up to seven days either way at no cost, because bloom does not read calendars.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><span class="rf-sample">Sample terms for this demo.</span></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/inquiry/' ); ?>">Ask for a hive plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
