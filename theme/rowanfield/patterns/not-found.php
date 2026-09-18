<?php
/**
 * Title: Not found
 * Slug: rowanfield/not-found
 * Categories: rowanfield-sections
 * Description: 404 message with the two most useful next steps.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">We could not find that page</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The link may be old. If you came here for a hive plan, you are one click away.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/inquiry/' ); ?>">Ask for a hive plan</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/' ); ?>">Go to the home page</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
