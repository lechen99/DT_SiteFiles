<?php
/**
 * Text widget.
 *
 * @package Ultimate Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function () {

	global $post;

	$content        = get_post_meta( $post->ID, 'udb_content', true );
	$content_height = get_post_meta( $post->ID, 'udb_content_height', true );
	$editor         = 'udb_content';
	$args           = array(
		'media_buttons' => false,
		'editor_height' => 300,
		'teeny'         => true,
	);

	?>

	<div data-type="text">

		<div class="subbox">
			<h2><?php _e( 'Content', 'utimate-dashboard' ); ?></h2>
			<div class="field">
				<div class="input-control">
					<?php wp_editor( $content, $editor, $args ); ?>
				</div>
			</div>
		</div>

		<div class="subbox">
			<h2><?php _e( 'Fixed Height', 'utimate-dashboard' ); ?></h2>
			<div class="field">
				<div class="input-control">
					<input type="text" name="udb_content_height" placeholder="200px" value="<?php echo esc_attr( $content_height ? $content_height : '' ); ?>">
				</div>
			</div>
		</div>

	</div>

	<?php

};
