<?php
/**
 * Plugin Name: Simple Eventbrite List
 * Plugin URI: https://github.com/domingobishop/simple-eventbrite-list
 * Description: Simple Eventbrite List plugin displays a list of events in a post or page using the [simple-eventbrite] shortcode from your Eventbrite account.
 * Version: 0.1 beta
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
add_action('wp_enqueue_scripts', 'sebl_css');
add_action('admin_menu', 'sebl_settings');
add_action('admin_init', 'sebl_settings_data');

// Shortcode [simple-eventbrite]
add_shortcode('simple-eventbrite', 'sebl_shortcode');
