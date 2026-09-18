<?php
/**
 * Title: Trust strip
 * Slug: rowanfield/trust-strip
 * Categories: rowanfield-sections
 * Description: Four short proof points with icons, placed right under the hero.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-trust rf-trust","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull rf-sec-trust rf-trust" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide"><?php
$items = array(
	array( 'icon-shield', 'Graded hives, or you do not pay for them' ),
	array( 'icon-clipboard', 'Fixed price per hive, in writing' ),
	array( 'icon-clock', 'Hive plan within 2 working days' ),
	array( 'icon-chart', 'Field report after every visit' ),
);
foreach ( $items as $item ) :
	?><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $img . $item[0] . '.svg' ); ?>" alt="" style="width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
