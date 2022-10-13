<?php
/**
 * Pro link metabox.
 *
 * @package Ultimate Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function () {
	?>

	<div class="postbox-content">
		<ul class="udb-pro-metabox-content">
			<li><?php _e( 'Video Widgets', 'ultimate-dashboard' ); ?></li>
			<li><?php _e( 'Contact Form Widgets', 'ultimate-dashboard' ); ?></li>
			<li><?php _e( 'Restrict Widgets to specific Users or User Roles', 'ultimate-dashboard' ); ?></li>
			<li><?php _e( 'Create a Custom Dashboard with <strong>Elementor</strong> or <strong>Beaver Builder</strong>', 'ultimate-dashboard' ); ?></li>
		</ul>

		<a style="width: 100%; text-align: center;" href="https://ultimatedashboard.io/docs-category/widgets/?utm_source=plugin&utm_medium=edit_widget_page&utm_campaign=udb" target="_blank" class="button button-primary button-large">
			<?php _e( 'Get Ultimate Dashboard PRO', 'ultimate-dashboard' ); ?>
		</a>
	</div>

	<?php
};
