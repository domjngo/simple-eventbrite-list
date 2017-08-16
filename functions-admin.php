<?php
/**
 * Admin
 *
 */

function tna_ebapi_settings() {
	add_options_page('Eventbrite settings', 'Eventbrite', 'administrator', 'tna-eventbrite-api', 'tna_ebapi_settings_page');
}

function tna_ebapi_settings_data() {
	register_setting('tna_ebapi_settings_group', 'tna_ebapi_token');
}

function tna_ebapi_settings_page()
{
	// admin
	?>
	<div class="wrap">
		<h2>Eventbrite settings</h2>

		<h3>Eventbrite API token</h3>

		<a href="https://www.eventbrite.com/developer/v3/api_overview/authentication/" target="_blank">Eventbrite API token documentation</a>

		<form method="post" action="options.php" novalidate="novalidate">
			<?php settings_fields( 'tna_ebapi_settings_group' ); ?>
			<?php do_settings_sections( 'tna_ebapi_settings_group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="tna_ebapi_token">API token</label></th>
					<td><input type="text" name="tna_ebapi_token" value="<?php echo esc_attr( get_option('tna_ebapi_token') ); ?>" /></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>

		<h3>Usage</h3>

		<p>Default (Displays 6 events from default orginiser): [tna-eventbrite]</p>

		<p>Organiser ID: [tna-eventbrite organiser=2226699547]</p>

		<p>Number of events displayed: [tna-eventbrite organiser=2226699547 numberevents=12]</p>

		<p>Category: [tna-eventbrite organiser=224466123 numberevents=12 category=115]</p>

		<h3>Organiser IDs</h3>

		<p>nationalarchives.eventbrite.co.uk: 2226699547</p>

		<p>nationalarchivesforarchives.eventbrite.co.uk: 8572569853</p>

		<p>nationalarchivesforhighereducation.eventbrite.co.uk: 8627521843</p>

		<p>exploreyourarchive.eventbrite.co.uk: 8537195957</p>

		<h3>Category IDs</h3>

		<p>Community: 113</p>

		<p>Family & Education: 115</p>

	</div>
	<?php
}