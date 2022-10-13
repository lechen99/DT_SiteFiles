<?php
/**
 * Export field.
 *
 * @package Ultimate Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function () {

	?>

	<p><?php _e( 'Use the export button to export to a .json file which you can then import to another Ultimate Dashboard installation.', 'ultimate-dashboard' ); ?></p>

	<div class="fields">
		<p>
			<label>
				<input type="checkbox" name="udb_export_settings" value="1" />
				<?php _e( 'Include Settings', 'ultimate-dashboard' ); ?>
			</label>
		</p>
	</div>

	<?php

};
