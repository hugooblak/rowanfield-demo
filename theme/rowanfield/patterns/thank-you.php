<?php
/**
 * Title: Thank you
 * Slug: rowanfield/thank-you
 * Categories: rowanfield-pages
 * Description: Confirmation after the form: what happens next, the phone number for urgent bookings, and useful reading while they wait.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","className":"rf-sec-thanks","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignfull rf-sec-thanks" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"is-style-card rf-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card rf-lift" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $img . 'icon-shield.svg' ); ?>" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">Thanks, your request is in.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">We will call or email within <strong>1 working hour</strong> to check the block details.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><strong>Today:</strong> we confirm acreage, variety and bloom dates.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Next:</strong> we work out hive numbers and a placement map.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Within two working days:</strong> your plan and fixed price by email.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"backgroundColor":"pine-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<p class="has-pine-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><strong>Bloom opening this week?</strong> Call <a href="tel:+15550100142">(555) 010-0142</a> and we will move you up the list.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)">While you wait</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="<?php echo $url( '/field-reports/' ); ?>">See what a field report covers</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo $url( '/#pricing' ); ?>">See the price guide</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
