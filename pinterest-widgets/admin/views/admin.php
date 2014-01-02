<?php
/**
 * Represents the view for the admin settings page
 *
 * @package    PW
 * @subpackage admin/views
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */
?>

<div class="wrap">

	

	<div id="pw-settings">
		<div id="pw-settings-content">
			
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			
			<form method="post" action="options.php">
				<?php
					// Show our settings before any help
					settings_fields( 'pw_settings_general' );
					do_settings_sections( 'pw_settings_general' );

					submit_button();
				?>
			</form>
			
			<h2>Help</h2>

			<h3 class="title"><?php _e( 'Pinterest Follow Button Shortcode', 'pw' ); ?></h3>

			<p>
				<?php _e( 'Use the shortcode', 'pw' ); ?> <code>[pin_follow]</code> <?php _e( 'to display the button within your content.', 'pw' ); ?>
			</p>
			<p>
				<?php _e( 'Use the function', 'pw' ); ?> <code><?php echo htmlentities( '<?php echo do_shortcode(\'[pin_follow]\'); ?>' ); ?></code>
				<?php _e( 'to display within template or theme files.', 'pw' ); ?>
			</p>

			<h4><?php _e( 'Available Attributes', 'pw' ); ?></h4>

			<table class="widefat importers" cellspacing="0">
				<thead>
				<tr>
					<th><?php _e( 'Attribute', 'pw' ); ?></th>
					<th><?php _e( 'Description', 'pw' ); ?></th>
					<th><?php _e( 'Choices', 'pw' ); ?></th>
					<th><?php _e( 'Default', 'pw' ); ?></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>url</td>
					<td><?php _e( 'The Pinterest User URL to be followed', 'pw' ); ?></td>
					<td>string value of URL</td>
					<td>none</td>
				</tr>
				<tr>
					<td>label</td>
					<td><?php _e( 'The text for the button label', 'pw' ); ?></td>
					<td>string value of button text</td>
					<td>Follow</td>
				</tr>
				</tbody>
			</table>
	</div>
</div>
