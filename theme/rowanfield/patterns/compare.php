<?php
/**
 * Title: Comparison table
 * Slug: rowanfield/compare
 * Categories: rowanfield-sections
 * Description: Side-by-side comparison against the common alternative, answering why choose us.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-compare","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull rf-sec-compare" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Why growers pick us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Our own hives, or a broker who subcontracts</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">Plenty of outfits take your booking and then buy the hives in from whoever has spare. Here is what to check before you sign with anyone.</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"rf-price-table rf-compare-table","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<figure class="wp-block-table rf-price-table rf-compare-table" style="margin-top:var(--wp--preset--spacing--40)"><table class="has-fixed-layout"><thead><tr><th>What to check</th><th>Rowanfield</th><th>Typical broker</th></tr></thead><tbody><tr><td>Who owns the hives</td><td>We do, all of them</td><td>Bought in, often late</td></tr><tr><td>Frame count</td><td>Graded and written on the invoice</td><td>Rarely stated</td></tr><tr><td>Price</td><td>Fixed per hive, in writing</td><td>Moves with the market</td></tr><tr><td>Spray window changes</td><td>We move hives, no extra charge</td><td>Often billed as a callout</td></tr><tr><td>After the bloom</td><td>Report with photos and frame counts</td><td>Usually nothing</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
