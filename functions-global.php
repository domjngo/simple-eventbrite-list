<?php
/**
 * Global
 *
 */

function tna_ebapi_css() {
	wp_register_style('ebapi-styles', plugin_dir_url(__FILE__) . 'css/eventbrite.css.min', '', 2.0, 'all');
	global $post;
	if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'tna-eventbrite')) {
		wp_enqueue_style('ebapi-styles');
	}
}
