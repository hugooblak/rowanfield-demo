<?php
/**
 * The form's questions and answer choices, in one place.
 *
 * Change a label here and it changes in the form, the admin inbox and the CSV export.
 *
 * @package RowanfieldLeads
 */

defined( 'ABSPATH' ) || exit;

/**
 * Answer choices for the two multiple-choice questions.
 *
 * @return array
 */
function npl_choices() {
	return apply_filters(
		'npl_choices',
		array(
			'service'  => array(
				'orchard'    => __( 'Orchard pollination', 'rowanfield-leads' ),
				'management' => __( 'Hive management', 'rowanfield-leads' ),
				'reports'    => __( 'Field reports only', 'rowanfield-leads' ),
				'planning'   => __( 'Help working out hive numbers', 'rowanfield-leads' ),
				'not-sure'   => __( 'Not sure yet', 'rowanfield-leads' ),
			),
			'timeline' => array(
				'asap'     => __( 'This coming bloom', 'rowanfield-leads' ),
				'next'     => __( 'Next season', 'rowanfield-leads' ),
				'research' => __( 'Just getting prices', 'rowanfield-leads' ),
			),
		)
	);
}

/**
 * Hidden fields that record where the visitor came from (for ad and SEO reporting).
 *
 * @return string[]
 */
function npl_tracking_fields() {
	return array( 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid', 'landing_page', 'referrer' );
}

/**
 * Human-readable label for a stored answer.
 *
 * @param string $field Field key.
 * @param string $value Stored value.
 * @return string
 */
function npl_label( $field, $value ) {
	$choices = npl_choices();
	return isset( $choices[ $field ][ $value ] ) ? $choices[ $field ][ $value ] : (string) $value;
}

/**
 * The consent sentence shown under the submit button. Saved with each lead as a record of what the person agreed to.
 *
 * @return string
 */
function npl_consent_text() {
	return apply_filters(
		'npl_consent_text',
		__( 'By clicking "Get my hive plan" you agree that Rowanfield may call, text or email you about your inquiry, including by automated means. Consent is not a condition of purchase. Message and data rates may apply. Reply STOP to opt out.', 'rowanfield-leads' )
	);
}

/**
 * Lead statuses for simple follow-up tracking in the admin.
 *
 * @return array
 */
function npl_statuses() {
	return array(
		'new'       => __( 'New', 'rowanfield-leads' ),
		'contacted' => __( 'Contacted', 'rowanfield-leads' ),
		'quoted'    => __( 'Quote sent', 'rowanfield-leads' ),
		'won'       => __( 'Won', 'rowanfield-leads' ),
		'lost'      => __( 'Lost', 'rowanfield-leads' ),
		'spam'      => __( 'Suspected spam', 'rowanfield-leads' ),
	);
}

/**
 * Page people land on after a successful submit.
 *
 * @return string
 */
function npl_thank_you_url() {
	$page_id = (int) get_option( 'npl_thank_you_page' );
	$url     = $page_id ? get_permalink( $page_id ) : home_url( '/thank-you/' );
	return apply_filters( 'npl_thank_you_url', $url );
}
