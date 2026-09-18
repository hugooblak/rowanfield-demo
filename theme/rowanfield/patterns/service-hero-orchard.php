<?php
/**
 * Title: Service hero: Orchard pollination
 * Slug: rowanfield/service-hero-orchard
 * Categories: rowanfield-sections
 * Description: Service page opening: headline, promise, two actions and an illustration.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"sand","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-hero has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Orchard pollination</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Graded hives, placed to a map you agreed</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"large"} -->
<p class="has-ink-soft-color has-text-color has-large-font-size">We open and grade every hive before it leaves the yard, place it where the map says, check it during the bloom, and collect it when you say the window has closed.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/inquiry/?service=orchard' ); ?>">Ask for a hive plan</a></div>
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
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $img . 'orchard.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
