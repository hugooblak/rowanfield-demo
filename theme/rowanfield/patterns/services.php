<?php
/**
 * Title: Services grid
 * Slug: rowanfield/services
 * Categories: rowanfield-sections
 * Description: Three service cards. Each links to its page or to the inquiry form with that service already picked.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-services is-style-section-sand","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-services is-style-section-sand" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">What we do</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Pollination services for growers</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"17rem"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)"><?php
$services = array(
	array( 'icon-bloom', 'Orchard pollination', 'Graded hives placed for the bloom, then collected when you say the window is closed.', '/orchard-pollination/', 'See how placement works' ),
	array( 'icon-hive', 'Hive management', 'Year-round colony care, feeding, mite treatment and requeening between contracts.', '/hive-management/', 'See what care includes' ),
	array( 'icon-chart', 'Field reports', 'Frame counts, placement maps and photos after every visit, sent as a PDF.', '/field-reports/', 'See a sample report' ),
);
foreach ( $services as $s ) :
	?><!-- wp:group {"className":"is-style-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-card"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $img . $s[0] . '.svg' ); ?>" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $s[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size"><?php echo esc_html( $s[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:700"><a href="<?php echo $url( $s[3] ); ?>"><?php echo esc_html( $s[4] ); ?> &rarr;</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
