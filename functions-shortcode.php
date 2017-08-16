<?php
/**
 * Shortcode
 *
 *
 */

function sebl_shortcode( $atts ) {

	$a = shortcode_atts( array(
		'organiser' => 2226699547,
		'numberevents' => 6,
		'category' => ''
	), $atts);

	$token = get_option('tna_ebapi_token');
	$organiser = $a['organiser'];
	$number = $a['numberevents'];
	$category = '';

	if ($a['category']) {
		$cat = $a['category'];
		$category = '&categories='.$cat;
	}
	if ($token=='') {
		return '<h2>Eventbrite API token not found</h2>
				<p>Please add token to settings page.
				<a href="https://www.eventbrite.com/developer/v3/api_overview/authentication/#ebapi-getting-a-token">
				For help please see Eventbrite documentation</a>.</p>';
	}

	$events = new Simple_Eventbrite_List;

	return $events->display( $organiser, $category, $token, $number );
}
