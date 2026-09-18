<?php
/**
 * Demo site setup for Rowanfield.
 *
 * Creates the pages from the theme's patterns, builds the menu, sets the front page, and adds
 * three sample inquiries so the inbox is not empty. Safe to run again: it skips anything that
 * already exists.
 *
 * Playground runs this automatically (see blueprint.json).
 * Local run:  wp eval-file content/setup.php
 *
 * @package Rowanfield
 */

defined( 'ABSPATH' ) || exit;

wp_set_current_user( 1 ); // Admin, so block markup is saved exactly as written.

/**
 * Pattern markup with nested pattern references expanded, so saved pages hold plain editable blocks.
 */
function nps_pattern( $slug ) {
	$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( $slug );
	if ( ! $pattern ) {
		nps_log( "Missing pattern: $slug" );
		return '';
	}
	return preg_replace_callback(
		'#<!-- wp:pattern \{"slug":"([^"]+)"\} /-->#',
		function ( $m ) {
			return nps_pattern( $m[1] );
		},
		$pattern['content']
	);
}

function nps_log( $msg ) {
	if ( defined( 'WP_CLI' ) && WP_CLI ) {
		WP_CLI::log( $msg );
	}
}

function nps_page( $slug, $title, $content, $excerpt, $template = '' ) {
	$existing = get_page_by_path( $slug );
	if ( $existing ) {
		return $existing->ID;
	}
	$id = wp_insert_post(
		array(
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_name'    => $slug,
			'post_title'   => $title,
			'post_content' => $content,
			'post_excerpt' => $excerpt,
			'meta_input'   => $template ? array( '_wp_page_template' => $template ) : array(),
		)
	);
	nps_log( "Page: $title" );
	return $id;
}

/* --------------------------------------------------------------------------
 * Site settings
 * ----------------------------------------------------------------------- */
update_option( 'blogname', 'Rowanfield' );
update_option( 'blogdescription', 'Commercial pollination for orchards and row crops. Graded hives, placed to a map, with a report after every visit.' );
update_option( 'timezone_string', 'America/Los_Angeles' );
update_option( 'date_format', 'F j, Y' );
update_option( 'posts_per_page', 9 );

// Remove WordPress's sample content.
foreach ( array( 'hello-world' => 'post', 'sample-page' => 'page' ) as $slug => $type ) {
	$sample = get_page_by_path( $slug, OBJECT, $type );
	if ( $sample ) {
		wp_delete_post( $sample->ID, true );
	}
}
$privacy_draft = get_page_by_path( 'privacy-policy' );
if ( $privacy_draft && 'draft' === $privacy_draft->post_status ) {
	wp_delete_post( $privacy_draft->ID, true );
}

/* --------------------------------------------------------------------------
 * Pages
 * ----------------------------------------------------------------------- */
$home = nps_page(
	'home',
	'Pollination for orchards and row crops',
	nps_pattern( 'rowanfield/page-home' ),
	'Graded hives placed for the bloom, hive management between contracts, and a field report after every visit. A plan and a fixed price within two working days.',
	'page-landing'
);

nps_page(
	'orchard-pollination',
	'Orchard pollination',
	nps_pattern( 'rowanfield/page-orchard' ),
	'Graded hives placed to a map you agreed, checked during the bloom, and collected when you say the window has closed.',
	'page-landing'
);

nps_page(
	'hive-management',
	'Hive management',
	nps_pattern( 'rowanfield/page-hive' ),
	'Feeding, mite treatment, requeening and winter checks between contracts, so the hives that arrive are strong.',
	'page-landing'
);

nps_page(
	'field-reports',
	'Field reports',
	nps_pattern( 'rowanfield/page-reports' ),
	'A PDF after every visit: frame counts per hive, your block map, flying conditions and photographs.',
	'page-landing'
);

$quote = nps_page(
	'inquiry',
	'Ask for a hive plan',
	nps_pattern( 'rowanfield/quote-funnel' ),
	'Four quick questions. A hive plan and a fixed price per hive within two working days.',
	'page-focus'
);

$thanks = nps_page(
	'thank-you',
	'Thank you',
	nps_pattern( 'rowanfield/thank-you' ),
	'Your request for a hive plan has been received.',
	'page-focus'
);

$about_content = <<<'HTML'
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Rowanfield is a family beekeeping business in the Rowan Valley. We started in 2004 with forty hives and a rule we still follow: the count you book is the count that lands.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Today we run about 3,000 hives and work with growers across three valleys. Every hive is ours. We do not buy in from brokers to fill a contract, because then nobody knows what is really in the box.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What you can count on</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li>Apiary registration #AP-000000 (sample), fully insured</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frame counts written on the invoice, hive by hive</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No charge for a hive that fails its grade</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A yard at 120 Example Road you are welcome to visit</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
HTML;
nps_page( 'about', 'About Rowanfield', $about_content . "\n\n" . nps_pattern( 'rowanfield/cta-inline' ), 'Family beekeeping business in the Rowan Valley since 2004. Our own hives, graded before delivery, frame counts on the invoice.' );

// FAQ page: the same objection-handling questions, grouped by topic.
$faq_groups = array(
	'Plans and prices' => array(
		array( 'Is the hive plan really free?', 'Yes. Working out hive numbers and sending you a price costs nothing, and there is no pressure to book.' ),
		array( 'Why half on placement and half on collection?', 'So you are not paying for a bloom that has not happened yet. The second half falls due when the hives leave your block.' ),
		array( 'What if a hive is weak?', 'We grade every hive before it leaves the yard. If one lands under the count you booked, we swap it or take it off the invoice. You choose.' ),
	),
	'On the block'     => array(
		array( 'How many hives does an acre need?', 'Apples usually one to two, cherries two to three, blueberries three to four. The block layout and the weather window move that, which is what the plan is for.' ),
		array( 'Who decides where the pallets go?', 'We agree a placement map with you first. Most blocks want pallets every two to three acres, sheltered from the prevailing wind.' ),
		array( 'My spray plan moves. What then?', 'Tell us and we move the hives. Up to seven days either side of the booked dates costs nothing extra.' ),
	),
	'Reports and records' => array(
		array( 'What is in a field report?', 'Frame counts for each hive, your block map with pallets marked, the weather on the day, photographs, and anything we moved.' ),
		array( 'How long do you keep the records?', 'Three years, so you can compare this bloom against the last two.' ),
	),
);
$faq_content = "<!-- wp:paragraph {\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\">Straight answers to what growers ask us most. Cannot find yours? Call <a href=\"tel:+15550100142\">(555) 010-0142</a>.</p>\n<!-- /wp:paragraph -->";
foreach ( $faq_groups as $group => $faqs ) {
	$faq_content .= "\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">" . esc_html( $group ) . "</h2>\n<!-- /wp:heading -->";
	foreach ( $faqs as $f ) {
		$faq_content .= "\n\n<!-- wp:details -->\n<details class=\"wp-block-details\"><summary>" . esc_html( $f[0] ) . "</summary><!-- wp:paragraph -->\n<p>" . esc_html( $f[1] ) . "</p>\n<!-- /wp:paragraph --></details>\n<!-- /wp:details -->";
	}
}
nps_page( 'faq', 'Frequently asked questions', $faq_content . "\n\n" . nps_pattern( 'rowanfield/cta-inline' ), 'Answers about hive numbers, grading, placement, spray windows, prices and field reports.' );

$privacy_content = <<<'HTML'
<!-- wp:paragraph {"backgroundColor":"sand"} -->
<p class="has-sand-background-color has-background"><strong>Sample policy for a demo site.</strong> A real policy must be written for the business and checked by a lawyer.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What we collect</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>When you ask for a hive plan we collect the ZIP code of the block, what you need, your bloom timing, first name, phone number and email. We also record which page or ad brought you to the site, so we know which advertising works.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">How we use it</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Only to put your plan together and send it to you. We keep a record of the consent you gave when you sent the form. We never sell or share your details.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Your choices</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Reply STOP to any text, or email <a href="mailto:hello@rowanfield.example">hello@rowanfield.example</a> to have your details deleted. That address is a sample for this demo.</p>
<!-- /wp:paragraph -->
HTML;
$privacy = nps_page( 'privacy-policy', 'Privacy policy', $privacy_content, 'How Rowanfield uses the details you send with the inquiry form.' );
update_option( 'wp_page_for_privacy_policy', $privacy );

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home );
update_option( 'npl_quote_page', $quote );
update_option( 'npl_thank_you_page', $thanks );

/* --------------------------------------------------------------------------
 * Main menu (Appearance > Editor > Navigation)
 * ----------------------------------------------------------------------- */
// Looked up by title: WordPress sometimes auto-creates a fallback "Navigation" menu first.
if ( ! get_posts( array( 'post_type' => 'wp_navigation', 'title' => 'Main menu', 'numberposts' => 1, 'post_status' => 'publish' ) ) ) {
	$links = array(
		array( 'Orchard pollination', '/orchard-pollination/', 'page' ),
		array( 'Hive management', '/hive-management/', 'page' ),
		array( 'Field reports', '/field-reports/', 'page' ),
		array( 'Pricing', '/#pricing', 'custom' ),
		array( 'FAQ', '/faq/', 'page' ),
	);
	$nav = '';
	foreach ( $links as $l ) {
		$attrs = array(
			'label' => $l[0],
			'url'   => home_url( $l[1] ),
			'kind'  => 'page' === $l[2] ? 'post-type' : 'custom',
		);
		if ( 'page' === $l[2] ) {
			$page          = get_page_by_path( trim( $l[1], '/' ) );
			$attrs['id']   = $page ? $page->ID : 0;
			$attrs['type'] = 'page';
		}
		$nav .= '<!-- wp:navigation-link ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES ) . ' /-->';
	}
	wp_insert_post(
		array(
			'post_type'    => 'wp_navigation',
			'post_status'  => 'publish',
			'post_title'   => 'Main menu',
			'post_content' => $nav,
		)
	);
	nps_log( 'Menu created.' );
}

/* --------------------------------------------------------------------------
 * Three sample inquiries, so the inbox shows what real ones look like.
 * ----------------------------------------------------------------------- */
if ( post_type_exists( 'npl_lead' ) && ! get_posts( array( 'post_type' => 'npl_lead', 'numberposts' => 1 ) ) ) {
	$samples = array(
		array( 'Sample grower A', '(555) 010-0171', 'sample-a@example.com', '97001', 'orchard', 'asap', 'contacted', array( 'utm_source' => 'google', 'utm_medium' => 'cpc', 'utm_campaign' => 'bloom-bookings', 'gclid' => 'EXAMPLE-GCLID' ), '-2 days' ),
		array( 'Sample grower B', '(555) 010-0183', 'sample-b@example.com', '97012', 'management', 'next', 'new', array( 'utm_source' => 'facebook', 'utm_medium' => 'paid_social', 'utm_campaign' => 'hive-care' ), '-5 hours' ),
		array( 'Sample grower C', '(555) 010-0195', 'sample-c@example.com', '97003', 'planning', 'research', 'new', array( 'referrer' => 'https://www.google.com/' ), '-40 minutes' ),
	);
	foreach ( $samples as $s ) {
		wp_insert_post(
			array(
				'post_type'   => 'npl_lead',
				'post_status' => 'publish',
				'post_title'  => $s[0] . ' · ' . npl_label( 'service', $s[4] ),
				'post_date'   => wp_date( 'Y-m-d H:i:s', strtotime( $s[8] ) ),
				'meta_input'  => array_merge(
					array(
						'name'         => $s[0],
						'phone'        => $s[1],
						'email'        => $s[2],
						'zip'          => $s[3],
						'service'      => $s[4],
						'timeline'     => $s[5],
						'status'       => $s[6],
						'landing_page' => home_url( '/' ),
						'consent_at'   => wp_date( 'Y-m-d H:i:s', strtotime( $s[8] ) ),
						'consent_text' => npl_consent_text(),
					),
					$s[7]
				),
			)
		);
	}
	nps_log( 'Sample inquiries added.' );
}

// Pretty links (/inquiry/ instead of ?page_id=5). Flushed last, after every page exists.
// set_permalink_structure() also updates the rules WordPress already loaded for this request.
// Only saving the option would rebuild the old rules, and pages would return "not found".
global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
flush_rewrite_rules( false );

nps_log( 'Rowanfield demo ready.' );
