<?php
/**
 * Admin
 *
 */

function sebl_settings() {
	add_options_page('Simple Eventbrite List settings', 'Eventbrite', 'administrator', 'simple-eventbrite-list', 'sebl_settings_page');
}

function sebl_settings_data() {
	register_setting('sebl_settings_group', 'sebl_token');
    register_setting('sebl_settings_group', 'sebl_organiser');
}

function sebl_settings_page()
{
	// admin
	?>
	<div class="wrap">
		<h2>Simple Eventbrite List settings</h2>

		<h3>Eventbrite Organiser ID and API token</h3>

		<a href="https://www.eventbrite.com/developer/v3/api_overview/authentication/" target="_blank">Eventbrite API token documentation</a>

		<form method="post" action="options.php" novalidate="novalidate">
			<?php settings_fields( 'sebl_settings_group' ); ?>
			<?php do_settings_sections( 'sebl_settings_group' ); ?>
			<table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="sebl_organiser">Organiser ID</label></th>
                    <td><input type="text" name="sebl_organiser" value="<?php echo esc_attr( get_option('sebl_organiser') ); ?>" /></td>
                </tr>
				<tr valign="top">
					<th scope="row"><label for="sebl_token">API token</label></th>
					<td><input type="text" name="sebl_token" value="<?php echo esc_attr( get_option('sebl_token') ); ?>" /></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>

		<h3>Usage</h3>

		<p>Default (Displays 6 events): [simple-eventbrite]</p>

		<p>Number of events displayed: [simple-eventbrite numberevents=12]</p>

		<p>Category: [simple-eventbrite numberevents=12 category=115]</p>

	</div>
	<?php
}