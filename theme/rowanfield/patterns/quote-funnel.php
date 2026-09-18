<?php
/**
 * Title: Inquiry funnel
 * Slug: rowanfield/quote-funnel
 * Categories: rowanfield-pages
 * Description: The full multi-step inquiry form with a short 'what happens next' panel beside it.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-funnel","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group alignfull rf-sec-funnel" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:group {"className":"is-style-card rf-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card rf-lift" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">Ask for a hive plan</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">4 quick questions, about 30 seconds. A plan and a fixed price within two working days.</p>
<!-- /wp:paragraph -->

<!-- wp:rowanfield/lead-form {"variant":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size">What happens next</h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"fontSize":"small"} -->
<ol class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li>We call or email within 1 working hour to check the block details.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>We look at your acreage, variety and bloom dates.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Your hive plan and fixed price arrive within two working days.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-checklist","fontSize":"small"} -->
<ul class="wp-block-list is-style-checklist has-small-font-size"><!-- wp:list-item -->
<li>No obligation, no pressure to book</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No charge for a hive that fails its grade</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Your details are never sold or shared</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:group {"className":"is-style-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:paragraph {"className":"rf-stars","fontSize":"small"} -->
<p class="rf-stars has-small-font-size"><span class="screen-reader-text">Rated </span>5 out of 5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">"The frame counts on the invoice matched what I saw when I opened a lid."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size">Sample grower &middot; Rowan Valley</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
