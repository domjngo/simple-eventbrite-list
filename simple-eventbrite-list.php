<?php
/**
 * Plugin Name: Simple Eventbrite List
 * Plugin URI: https://github.com/domingobishop/simple-eventbrite-list
 * Description: Simple Eventbrite List plugin displays a list of events in a post or page using the [simple-eventbrite] shortcode.
 * Version: 1.0
 * Author: Chris Bishop
 * Author URI: https://github.com/domingobishop
 * License: GPL2
 */

// Included functions
include 'functions-global.php';
include 'functions-shortcode.php';
include 'functions-admin.php';
include 'functions-eventbrite.php';

// add_action
add_action('wp_enqueue_scripts', 'tna_ebapi_css');
add_action('admin_menu', 'tna_ebapi_settings');
add_action('admin_init', 'tna_ebapi_settings_data');

// Shortcode [tna-eventbrite]
add_shortcode('tna-eventbrite', 'tna_ebapi_shortcode');
