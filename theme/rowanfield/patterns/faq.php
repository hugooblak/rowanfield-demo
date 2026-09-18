<?php
/**
 * Title: FAQ (objections)
 * Slug: rowanfield/faq
 * Categories: rowanfield-sections
 * Description: Open/close questions that answer the worries that stop growers from asking for a plan.
 */
$img = get_theme_file_uri( 'assets/img/' );
$url = function ( $path ) { return esc_url( home_url( $path ) ); };
?>
<!-- wp:group {"align":"full","anchor":"faq","className":"rf-sec-faq","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div id="faq" class="wp-block-group alignfull rf-sec-faq" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Questions</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Before you book hives</h2>
<!-- /wp:heading -->

<?php
$faqs = array(
	array( 'How many hives do I actually need?', 'It depends on the crop, the block and the weather window. Apples usually take one to two hives an acre, blueberries three to four. Send us the block details and we will put a number in writing.' ),
	array( 'What does graded mean?', 'We open each hive and count frames covered in bees. The count you book is the count that lands, and it goes on your invoice hive by hive.' ),
	array( 'Can I see the hives before they go on my block?', 'Yes. The yard at 120 Example Road is open to growers, and you are welcome to open lids with us.' ),
	array( 'Who puts the hives where?', 'We do, using a placement map we agree with you first. Most blocks want pallets every two to three acres, away from the prevailing wind.' ),
	array( 'What if the bloom is poor?', 'The hives still worked, so the hive fee still stands. What you get is the report showing what landed and when, which is worth having for next season.' ),
	array( 'What happens to my details?', 'Only Rowanfield uses them, to put your plan together. We do not sell or share them.' ),
);
foreach ( $faqs as $f ) :
	?><!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( $f[0] ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( $f[1] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<?php endforeach; ?><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40)">Still unsure? <a href="tel:+15550100142">Call (555) 010-0142</a> and talk to a beekeeper.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
