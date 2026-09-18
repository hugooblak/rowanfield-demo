<?php
/**
 * Title: Field reports: what is in one
 * Slug: rowanfield/reports-sample
 * Categories: rowanfield-sections
 * Description: What a field report contains, and a sample table of frame counts.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","anchor":"report","className":"rf-sec-details","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div id="report" class="wp-block-group alignfull rf-sec-details" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading -->
<h2 class="wp-block-heading">What is in a report</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li>Frame count for every hive, not a yard average</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Your block map with each pallet marked</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Temperature and wind on the day of the check</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Photographs of open brood, taken on the block</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anything we moved, and why</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Send it straight to your agronomist. It is a plain PDF, no login needed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"className":"is-style-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sample: block 4, second check</h3>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false,"className":"rf-price-table rf-report-table"} -->
<figure class="wp-block-table rf-price-table rf-report-table"><table><thead><tr><th>Pallet</th><th>Hives</th><th>Average frames</th><th>Note</th></tr></thead><tbody><tr><td>4A north</td><td>4</td><td>9.5</td><td>Strongest on the block</td></tr><tr><td>4B center</td><td>4</td><td>8.75</td><td>One hive re-queened</td></tr><tr><td>4C south</td><td>4</td><td>8.0</td><td>Shaded until 10am</td></tr><tr><td>4D gate</td><td>2</td><td>9.0</td><td>Moved 30 feet, wind</td></tr></tbody></table><figcaption class="wp-element-caption">Sample figures for this demo. 14 degrees, light wind, checked 9:40am.</figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
