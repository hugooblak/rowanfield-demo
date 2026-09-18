<?php
/**
 * Plugin Name: Rowanfield Demo Notes
 * Description: Portfolio helper. Shows a "this is a demo" bar and, when switched on, a note above each section explaining the conversion (CRO) decision behind it. Delete this plugin on a real site.
 * Version: 1.0.0
 * Requires at least: 6.6
 * Author: Hugo Oblak
 * License: GPL-2.0-or-later
 *
 * The notes are not stored in page content, so editors never see them and they vanish with the plugin.
 *
 * @package RowanfieldDemoNotes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Notes on or off. ?cro=1 turns them on (and remembers it in a cookie while you browse), ?cro=0 turns them off.
 */
function npd_notes_on() {
	static $on = null;
	if ( null === $on ) {
		// phpcs:disable WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['cro'] ) ) {
			$on = '1' === $_GET['cro'];
		} else {
			$on = isset( $_COOKIE['npd_cro'] ) && '1' === $_COOKIE['npd_cro'];
		}
		// phpcs:enable
	}
	return $on;
}

add_action(
	'send_headers',
	function () {
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['cro'] ) && ! headers_sent() ) {
			setcookie( 'npd_cro', npd_notes_on() ? '1' : '0', 0, COOKIEPATH ? COOKIEPATH : '/', COOKIE_DOMAIN, is_ssl(), true );
		}
	}
);

/**
 * The notes, keyed by the section class used in the theme's patterns.
 *
 * @return array
 */
function npd_notes() {
	return array(
		'rf-sec-hero'     => array(
			'Offer and first step above the fold',
			'One headline with a concrete promise, not a slogan. Three proof points answer the worries a grower actually has: will the hives be strong, will they fit my spray window, will I know what happened. The form starts here with the easiest question, a ZIP code, because someone who has started a form is far more likely to finish it. Service pages reuse this layout with two actions: plan or call.',
		),
		'rf-sec-trust'    => array(
			'Trust strip right under the hero',
			'Four short claims a grower can check, placed where they decide whether to keep reading. Each icon is a hand-written SVG under 500 bytes, so the strip costs almost nothing to load.',
		),
		'rf-sec-steps'    => array(
			'How it works',
			'People do not fill in forms when they cannot picture what happens next. Three steps make the process feel small, and the button underneath says "Start step 1" rather than "Contact us".',
		),
		'rf-sec-services' => array(
			'Services that lead somewhere',
			'Each card goes to its own service page, or straight to the form with that service already chosen (?service=planning). One less question for the visitor to answer.',
		),
		'rf-sec-price'    => array(
			'Show the price range',
			'Price is the first question most visitors have. Hiding it sends them to a competitor to find out. Ranges also pre-qualify inquiries, so time is not spent on budgets that were never going to fit.',
		),
		'rf-sec-reviews'  => array(
			'Reviews that answer objections',
			'Each review answers a specific worry: were the hives really that strong, what happens when dates move, do I get anything in writing. General praise persuades nobody. These are labeled placeholders; on a live site they come from named growers who agreed to be quoted.',
		),
		'rf-sec-compare'  => array(
			'Compare against the real alternative',
			'The visitor is already comparing. A plain table frames the choice on the points where this business wins, without naming or insulting anyone.',
		),
		'rf-sec-promise'  => array(
			'Risk reversal and terms',
			'A written grading guarantee removes "what if the hives are weak". Split payment removes "what if I pay up front and the bloom fails". The dark background breaks up the page so this section gets read rather than scrolled past.',
		),
		'rf-sec-faq'      => array(
			'FAQ as objection handling',
			'These are the real reasons people hesitate, in their own words. Built with WordPress own Details block: no JavaScript, works with a keyboard, and the client can edit it like any other text.',
		),
		'rf-sec-final'    => array(
			'Second chance at the end',
			'Someone who scrolled this far is interested but not convinced. Same low-effort first step as the hero, plus the phone number for people who would rather talk.',
		),
		'rf-sec-details'  => array(
			'Specific details',
			'Listing exactly what is included builds trust, and makes a cheaper quote that leaves things out easy to spot.',
		),
		'rf-sec-funnel'   => array(
			'Focus page: nothing to click except the form',
			'No menu and no footer links, so there are no exits. One question per step, large choice cards that advance by themselves, a progress bar, and contact details asked last, once the visitor has already invested effort. Each personal field says why it is needed. Hidden fields record UTM tags and ad click IDs, so every inquiry shows which campaign it came from. It still works as a plain form with JavaScript switched off.',
		),
		'rf-sec-thanks'   => array(
			'Thank-you page that keeps the inquiry warm',
			'Says exactly when they will hear back, gives a fast path for a bloom opening this week, and fires one "generate_lead" analytics event per real submission.',
		),
	);
}

/**
 * Put a note in front of each matching section when notes are on.
 */
add_filter(
	'render_block',
	function ( $html, $block ) {
		if ( is_admin() || ! npd_notes_on() || empty( $block['attrs']['className'] ) ) {
			return $html;
		}
		foreach ( npd_notes() as $class => $note ) {
			if ( preg_match( '/(^|\s)' . preg_quote( $class, '/' ) . '(\s|$)/', $block['attrs']['className'] ) ) {
				return sprintf(
					'<aside class="npd-note" aria-label="%s"><p class="npd-note-title"><span>Design note</span> %s</p><p>%s</p></aside>',
					esc_attr( 'Design note: ' . $note[0] ),
					esc_html( $note[0] ),
					esc_html( $note[1] )
				) . $html;
			}
		}
		return $html;
	},
	10,
	2
);

/**
 * Demo bar at the very top of every page.
 */
// The demo bar sits at the very top of the page, which would otherwise put its link ahead of
// WordPress's skip link in the tab order. So we print our own skip link first and hide core's.
add_action(
	'wp_body_open',
	function () {
		printf(
			'<a class="npd-skip skip-link screen-reader-text" href="#wp--skip-link--target">%s</a>',
			esc_html__( 'Skip to content', 'rowanfield-demo-notes' )
		);
	},
	0
);

add_action(
	'wp_body_open',
	function () {
		$toggle = add_query_arg( 'cro', npd_notes_on() ? '0' : '1' );
		?>
		<div class="npd-bar" role="region" aria-label="Demo notice">
			<p><strong>Portfolio demo.</strong> Rowanfield is a fictional business; reviews, prices and figures are samples.
				<a href="<?php echo esc_url( $toggle ); ?>"><?php echo npd_notes_on() ? 'Hide the design notes' : 'Show the design notes behind each section'; ?></a>
			</p>
		</div>
		<?php
	},
	1
);

add_action(
	'wp_head',
	function () {
		?>
		<style id="npd-css">
			.npd-bar ~ a.skip-link:not(.npd-skip){display:none !important}
			.npd-bar{background:#17281C;color:#E9EEF2;font-size:.875rem;line-height:1.4;padding:.5rem 1rem;text-align:center}
			.npd-bar p{margin:0}.npd-bar a{color:#EFA818;font-weight:700;margin-left:.35rem}
			.npd-note{max-width:1180px;margin:1rem auto;box-sizing:border-box;width:calc(100% - 2rem);background:#FFF8DB;border:2px dashed #C99A06;border-radius:10px;padding:.8rem 1rem;color:#3D2E00;font-size:.9375rem;line-height:1.5}
			.npd-note p{margin:0}.npd-note-title{font-weight:800;margin-bottom:.25rem !important}
			.npd-note-title span{display:inline-block;background:#3D2E00;color:#FFF8DB;font-size:.6875rem;letter-spacing:.06em;text-transform:uppercase;border-radius:4px;padding:.1rem .4rem;margin-right:.35rem;vertical-align:.1em}
		</style>
		<?php
	}
);

/**
 * A short guide on the Dashboard for anyone reviewing the demo in WordPress Playground.
 */
add_action(
	'wp_dashboard_setup',
	function () {
		wp_add_dashboard_widget(
			'npd_guide',
			'Rowanfield demo: where to look',
			function () {
				$items = array(
					array( home_url( '/?cro=1' ), 'Home page with the design notes switched on' ),
					array( home_url( '/inquiry/' ), 'The 4-step inquiry form (submit it, then check Inquiries)' ),
					array( admin_url( 'edit.php?post_type=npl_lead' ), 'Inquiries inbox, with status and CSV export' ),
					array( admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ), 'Edit the home page (normal blocks, no page builder)' ),
					array( admin_url( 'site-editor.php' ), 'Site editor: styles, header, footer, templates' ),
				);
				echo '<ol>';
				foreach ( $items as $item ) {
					printf( '<li><a href="%s">%s</a></li>', esc_url( $item[0] ), esc_html( $item[1] ) );
				}
				echo '</ol>';
			}
		);
	}
);
