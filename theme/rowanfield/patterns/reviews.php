<?php
/**
 * Title: Reviews
 * Slug: rowanfield/reviews
 * Categories: rowanfield-sections
 * Description: Three grower reviews. Labeled as sample content in this demo.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-reviews is-style-section-sand","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-reviews is-style-section-sand" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Reviews</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What growers say</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size">Placeholder reviews for this demo. On a live site these come from real, named growers who have agreed to be quoted.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)"><?php
$reviews = array(
	array( 'The frame counts on the invoice matched what I saw when I opened a lid. That had not happened before.', 'Sample grower', 'Apples, Rowan Valley' ),
	array( 'They moved two pallets a day early because our spray got brought forward. No argument, no extra charge.', 'Sample grower', 'Cherries, Kestrel Flats' ),
	array( 'The report after each visit is the part I did not know I needed. I can show it to my agronomist.', 'Sample grower', 'Blueberries, Pinewood Ridge' ),
);
foreach ( $reviews as $r ) :
	?><!-- wp:group {"className":"is-style-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-card"><!-- wp:paragraph {"className":"rf-stars","fontSize":"small"} -->
<p class="rf-stars has-small-font-size"><span class="screen-reader-text">Rated </span>5 out of 5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size"><strong><?php echo esc_html( $r[1] ); ?></strong> &middot; <?php echo esc_html( $r[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
