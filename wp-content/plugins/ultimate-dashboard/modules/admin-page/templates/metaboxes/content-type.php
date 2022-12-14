<?php
/**
 * Content type metabox.
 *
 * @package Ultimate Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function ( $post ) {

	$content_type = get_post_meta( $post->ID, 'udb_content_type', true );
	$content_type = $content_type ? $content_type : 'builder';
	?>

	<div class="postbox-content">
		<div class="fields">
			<div class="field">
				<div class="control">
					<select name="udb_content_type" id="udb_content_type" class="is-full">
						<option value="builder" <?php selected( $content_type, 'builder' ); ?>><?php _e( 'Default Editor', 'ultimate-dashboard' ); ?></option>
						<option value="html" <?php selected( $content_type, 'html' ); ?>><?php _e( 'HTML Editor', 'ultimate-dashboard' ); ?></option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<?php
};
