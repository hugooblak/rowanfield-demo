<?php
/**
 * Title: Inline call to action
 * Slug: rowanfield/cta-inline
 * Categories: rowanfield-sections
 * Description: Small box at the end of a page, linking to the inquiry form.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"className":"is-style-card rf-sec-inline","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"backgroundColor":"pine-light","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card rf-sec-inline has-pine-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Not sure how many hives you need?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Send us the block details. You get a hive plan and a fixed price within two working days.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/inquiry/' ); ?>">Ask for a hive plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
