<?php
/**
 * Title: Hive management: the year
 * Slug: rowanfield/hive-care
 * Categories: rowanfield-sections
 * Description: Four numbered stages of colony care across a year.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-steps","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-steps" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide">What a year of care looks like</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)"><?php
$steps = array(
	array( 'After collection', 'Hives come home, get weighed and fed if they are light. Anything queenless is marked and dealt with that week.' ),
	array( 'Mite treatment', 'We sample before we treat, and treat on the number, not the calendar. The reading goes in your file either way.' ),
	array( 'Requeening', 'Colonies with a tired queen get a new one from our own stock, so the genetics stay known.' ),
	array( 'Build up to bloom', 'Feeding starts six weeks out. We grade in the week before delivery, and only graded hives go on the truck.' ),
);
foreach ( $steps as $i => $step ) :
	?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"rf-step-num"} -->
<p class="rf-step-num"><?php echo (int) $i + 1; ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $step[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color"><?php echo esc_html( $step[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
