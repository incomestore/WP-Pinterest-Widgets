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
			
			<!-- Follow Button Shortcode Help -->
			<h3 class="title"><?php _e( 'Pinterest Follow Button Shortcode', 'pw' ); ?></h3>

			<p>
				<?php _e( 'Use the shortcode', 'pw' ); ?> <code>[pin_follow]</code> <?php _e( 'to display the Pinterest Follow Button within your content.', 'pw' ); ?>
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
					<td>username</td>
					<td><?php _e( 'Your Pinterest username', 'pw' ); ?></td>
					<td>A Pinterest username</td>
					<td>pinterest</td>
				</tr>
				<tr>
					<td>label</td>
					<td><?php _e( 'The text for the button label', 'pw' ); ?></td>
					<td>Any text</td>
					<td>Follow me on Pinterest</td>
				</tr>
				</tbody>
			</table>
			
			<!-- Pin Widget Shortcode Help -->
			<h3 class="title"><?php _e( 'Pinterest Pin Widget Shortcode', 'pw' ); ?></h3>

			<p>
				<?php _e( 'Use the shortcode', 'pw' ); ?> <code>[pin_widget]</code> <?php _e( 'to display the Pin Widget within your content.', 'pw' ); ?>
			</p>
			<p>
				<?php _e( 'Use the function', 'pw' ); ?> <code><?php echo htmlentities( '<?php echo do_shortcode(\'[pin_widget]\'); ?>' ); ?></code>
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
					<td><?php _e( 'The Pinterest pin URL you want to display', 'pw' ); ?></td>
					<td>A Pinterest pin URL</td>
					<td>none</td>
				</tr>
				</tbody>
			</table>
			
			<!-- Pin Board Widget Shortcode Help -->
			<h3 class="title"><?php _e( 'Pinterest Board Widget Shortcode', 'pw' ); ?></h3>

			<p>
				<?php _e( 'Use the shortcode', 'pw' ); ?> <code>[pin_board]</code> <?php _e( 'to display the Board Widget within your content.', 'pw' ); ?>
			</p>
			<p>
				<?php _e( 'Use the function', 'pw' ); ?> <code><?php echo htmlentities( '<?php echo do_shortcode(\'[pin_board]\'); ?>' ); ?></code>
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
					<td><?php _e( 'The Pinterest board URL you want to display', 'pw' ); ?></td>
					<td>A Pinterest board URL</td>
					<td>none</td>
				</tr>
				<tr>
					<td>size</td>
					<td><?php _e( 'The size of the board', 'pw' ); ?></td>
					<td>square, sidebar, header, custom</td>
					<td>square</td>
				</tr>
				<tr>
					<td colspan="4">
						<strong>The following options only take effect when size is set to custom, otherwise they will be ignored</strong>
					</td>
				</tr>
				<tr>
					<td>image_width</td>
					<td><?php _e( 'The size of the images on the board', 'pw' ); ?></td>
					<td>Any number greater than 60</td>
					<td>60</td>
				</tr>
				<tr>
					<td>board_height</td>
					<td><?php _e( 'The height of the board', 'pw' ); ?></td>
					<td>Any number greater than 60</td>
					<td>800</td>
				</tr>
				<tr>
					<td>board_width</td>
					<td><?php _e( 'The width of the board', 'pw' ); ?></td>
					<td>Any number greater than 130</td>
					<td>150</td>
				</tr>
				</tbody>
			</table>
			
			<!-- Profile Widget Shortcode Help -->
			<h3 class="title"><?php _e( 'Pinterest Profile Widget Shortcode', 'pw' ); ?></h3>

			<p>
				<?php _e( 'Use the shortcode', 'pw' ); ?> <code>[pin_profile]</code> <?php _e( 'to display the Profile Widget within your content.', 'pw' ); ?>
			</p>
			<p>
				<?php _e( 'Use the function', 'pw' ); ?> <code><?php echo htmlentities( '<?php echo do_shortcode(\'[pin_profile]\'); ?>' ); ?></code>
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
					<td>username</td>
					<td><?php _e( 'The Pinterest username', 'pw' ); ?></td>
					<td>A Pinterest username</td>
					<td>pinterest</td>
				</tr>
				<tr>
					<td>size</td>
					<td><?php _e( 'The size of the widget', 'pw' ); ?></td>
					<td>square, sidebar, header, custom</td>
					<td>square</td>
				</tr>
				<tr>
					<td colspan="4">
						<strong>The following options only take effect when size is set to custom, otherwise they will be ignored</strong>
					</td>
				</tr>
				<tr>
					<td>image_width</td>
					<td><?php _e( 'The size of the images on the widget', 'pw' ); ?></td>
					<td>Any number greater than 60</td>
					<td>60</td>
				</tr>
				<tr>
					<td>board_height</td>
					<td><?php _e( 'The height of the widget', 'pw' ); ?></td>
					<td>Any number greater than 60</td>
					<td>800</td>
				</tr>
				<tr>
					<td>board_width</td>
					<td><?php _e( 'The width of the widget', 'pw' ); ?></td>
					<td>Any number greater than 130</td>
					<td>150</td>
				</tr>
				</tbody>
			</table>
	</div>
</div>
