<?php
/**
 * Title: Final call to action with form
 * Slug: rowanfield/final-cta
 * Categories: rowanfield-sections
 * Description: Closing section that repeats the offer and the first form step, for people who scrolled to the end.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-final is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-final is-style-section-dark" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:heading -->
<h2 class="wp-block-heading">Find out how many hives your block needs. Asking costs nothing.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Start with the ZIP code of the block. We confirm we cover it, then ask three short questions about the crop and the dates.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Prefer to talk? <a href="tel:+15550100142"><strong>(555) 010-0142</strong></a>, Mon to Fri 7am to 7pm, Sat 8am to 2pm.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:group {"className":"is-style-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:rowanfield/lead-form {"variant":"start"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
