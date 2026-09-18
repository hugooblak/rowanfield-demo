<?php
/**
 * Title: Part: footer
 * Slug: rowanfield/part-footer
 * Inserter: no
 *
 * Template part markup lives in a pattern so links use this site's own address.
 */
?>
<!-- wp:group {"tagName":"div","className":"rf-footer is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group rf-footer is-style-section-dark" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"className":"rf-brand","layout":{"type":"flex"}} -->
<div class="wp-block-group rf-brand"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Commercial pollination, hive management and field reporting for orchards and row crops in the Rowan Valley. Family run since 2004.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:+15550100142"><strong>(555) 010-0142</strong></a><br>120 Example Road, Rowan Valley<br>Mon to Fri 7am to 7pm, Sat 8am to 2pm<br>Apiary registration #AP-000000 (sample)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size">Services</h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small"} -->
<ul class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/orchard-pollination/' ) ); ?>">Orchard pollination</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/hive-management/' ) ); ?>">Hive management</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/field-reports/' ) ); ?>">Field reports</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/inquiry/' ) ); ?>">Ask for a hive plan</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size">Company</h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small"} -->
<ul class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About us</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy policy</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size">Where we work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Rowan Valley, Kestrel Flats, Pinewood Ridge and blocks within 120 miles of the yard.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","style":{"color":{"background":"#ffffff26"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff26;color:#ffffff26"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"wide","fontSize":"small"} -->
<p class="alignwide has-small-font-size">&copy; Rowanfield. Rowanfield is a fictional company made for a portfolio demo. Names, reviews, prices and figures are sample content.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"rf-mobile-cta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons rf-mobile-cta"><!-- wp:button {"className":"is-style-outline rf-track-call"} -->
<div class="wp-block-button is-style-outline rf-track-call"><a class="wp-block-button__link wp-element-button" href="tel:+15550100142">Call now</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"rf-track-cta"} -->
<div class="wp-block-button rf-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/inquiry/' ) ); ?>">Hive plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
