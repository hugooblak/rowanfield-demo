<?php
/**
 * Title: Service hero: Field reports
 * Slug: rowanfield/service-hero-reports
 * Categories: rowanfield-sections
 * Description: Service page opening: headline, promise, two actions and a summary card.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"sand","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-hero has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Field reports</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Know what landed, and what it did while it was there</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"large"} -->
<p class="has-ink-soft-color has-text-color has-large-font-size">A PDF after every visit: frame counts per hive, where each pallet sits on your block map, flying conditions on the day, and photographs.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/field-reports/#report' ); ?>">See what a report covers</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline rf-track-call"} -->
<div class="wp-block-button is-style-outline rf-track-call"><a class="wp-block-button__link wp-element-button" href="tel:+15550100142">Call (555) 010-0142</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"rf-stars","fontSize":"small"} -->
<p class="rf-stars has-small-font-size"><strong>4.9 out of 5</strong> from 84 growers <span class="rf-sample">(sample figure)</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:group {"className":"is-style-card rf-lift","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card rf-lift">
<!-- wp:paragraph {"className":"rf-stat","fontSize":"xx-large"} -->
<p class="rf-stat has-xx-large-font-size">Same day</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size">reports land the evening of the visit</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"rf-stat","fontSize":"xx-large"} -->
<p class="rf-stat has-xx-large-font-size">Per hive</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size">frame counts, not a yard average</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"rf-stat","fontSize":"xx-large"} -->
<p class="rf-stat has-xx-large-font-size">3 years</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size">of history kept for your blocks</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size"><span class="rf-sample">Sample figures for this demo.</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
