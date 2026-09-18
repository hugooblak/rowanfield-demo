<?php
/**
 * Title: How it works (3 steps)
 * Slug: rowanfield/how-it-works
 * Categories: rowanfield-sections
 * Description: Three numbered steps from first contact to hives collected.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-steps","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-steps" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">How it works</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">From first call to hives collected, in three steps</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)"><?php
$steps = array(
	array( 'Tell us where and when', 'Answer four short questions, or call. We check we cover your area, then go through the crop, the acreage and your spray plan with you.' ),
	array( 'Get a hive plan and a fixed price', 'How many hives, where they go, when they land and when they leave. The price per hive is written down before anything moves.' ),
	array( 'We place, check and collect', 'Hives arrive graded. We check them during the bloom and send a report each time. They go when you say the window is closed.' ),
);
foreach ( $steps as $i => $step ) :
	?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"rf-step-num"} -->
<p class="rf-step-num"><?php echo (int) $i + 1; ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $step[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color"><?php echo esc_html( $step[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<?php endforeach; ?></div>
<!-- /wp:columns -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/inquiry/' ); ?>">Start step 1: ask for a hive plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
