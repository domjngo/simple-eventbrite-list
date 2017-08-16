<?php
/**
 * Global
 *
 */

function sebl_css() {
	wp_register_style('sebl-styles', plugin_dir_url(__FILE__) . 'css/eventbrite.css.min', '', 1.0, 'all');
	global $post;
	if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'simple-eventbrite')) {
		wp_enqueue_style('sebl-styles');
	}
}
