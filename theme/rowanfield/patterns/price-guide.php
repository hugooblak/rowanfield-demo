<?php
/**
 * Title: Price guide
 * Slug: rowanfield/price-guide
 * Categories: rowanfield-sections
 * Description: Honest price ranges by crop, what changes the price, and a link to get an exact number.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","anchor":"pricing","className":"rf-sec-price","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div id="pricing" class="wp-block-group alignfull rf-sec-price" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Price guide</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What does a hive cost?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color">Most growers want a number before they talk to anyone. These are the ranges we see by crop. Your hive plan gives the exact price.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">What moves the price</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-checklist","fontSize":"small"} -->
<ul class="wp-block-list is-style-checklist has-small-font-size"><!-- wp:list-item -->
<li>How many frames of bees you need per hive</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>How long the hives stay on the block</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Distance from our yard, and truck access</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>How tight the spray window is</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"is-style-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:table {"hasFixedLayout":false,"className":"rf-price-table"} -->
<figure class="wp-block-table rf-price-table"><table><thead><tr><th>Crop</th><th>Hives per acre</th><th>Price per hive</th></tr></thead><tbody><tr><td>Apples and pears</td><td>1 to 2</td><td>$95 to $130</td></tr><tr><td>Cherries and plums</td><td>2 to 3</td><td>$110 to $150</td></tr><tr><td>Blueberries</td><td>3 to 4</td><td>$130 to $180</td></tr><tr><td>Squash and melons</td><td>1 to 2</td><td>$85 to $120</td></tr></tbody></table><figcaption class="wp-element-caption">Sample prices for this demo. Includes delivery, placement, grading, checks during the bloom and collection.</figcaption></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>Terms:</strong> half on placement, half on collection. No charge for a hive that fails its grade.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo $url( '/inquiry/' ); ?>">Get my exact price</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
