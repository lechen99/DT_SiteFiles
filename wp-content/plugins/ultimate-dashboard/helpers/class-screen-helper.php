<?php
/**
 * Screen helper.
 *
 * @package Ultimate_Dashboard
 */

namespace Udb\Helpers;

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Class to setup screen helper.
 */
class Screen_Helper {
	/**
	 * Check if current screen is new widget screen.
	 *
	 * @return boolean
	 */
	public function is_new_widget() {

		global $pagenow, $typenow;
		return ( 'post-new.php' === $pagenow && 'udb_widgets' === $typenow ? true : false );

	}

	/**
	 * Check if current screen is edit widget screen.
	 *
	 * @return boolean
	 */
	public function is_edit_widget() {

		global $pagenow, $typenow;
		return ( 'post.php' === $pagenow && 'udb_widgets' === $typenow ? true : false );

	}

	/**
	 * Check if current screen is widget list screen.
	 *
	 * @return boolean
	 */
	public function is_widget_list() {

		$current_screen = get_current_screen();
		return ( 'edit-udb_widgets' === $current_screen->id ? true : false );

	}

	/**
	 * Check if current screen is dashboard page.
	 *
	 * @return boolean
	 */
	public function is_dashboard() {

		global $pagenow;
		return ( 'index.php' === $pagenow ? true : false );

	}

	/**
	 * Check if current screen is settings page.
	 *
	 * @return boolean
	 */
	public function is_settings() {

		$current_screen = get_current_screen();
		return ( 'udb_widgets_page_udb_settings' === $current_screen->id ? true : false );

	}

	/**
	 * Check if current screen is branding page.
	 *
	 * @return boolean
	 */
	public function is_branding() {

		$current_screen = get_current_screen();
		return ( 'udb_widgets_page_udb_branding' === $current_screen->id ? true : false );

	}

	/**
	 * Check if current screen is tools page.
	 *
	 * @return boolean
	 */
	public function is_tools() {

		$current_screen = get_current_screen();
		return ( 'udb_widgets_page_udb_tools' === $current_screen->id ? true : false );

	}

	/**
	 * Check if current screen is new admin page screen.
	 *
	 * @return boolean
	 */
	public function is_new_admin_page() {

		global $pagenow, $typenow;
		return ( 'post-new.php' === $pagenow && 'udb_admin_page' === $typenow ? true : false );

	}

	/**
	 * Check if current screen is edit admin page screen.
	 *
	 * @return boolean
	 */
	public function is_edit_admin_page() {

		global $pagenow, $typenow;
		return ( 'post.php' === $pagenow && 'udb_admin_page' === $typenow ? true : false );

	}

	/**
	 * Check if current screen is admin page list screen.
	 *
	 * @return boolean
	 */
	public function is_admin_page_list() {

		$current_screen = get_current_screen();
		return ( 'edit-udb_admin_page' === $current_screen->id ? true : false );

	}

	/**
	 * Check if current screen is admin menu page.
	 *
	 * @return boolean
	 */
	public function is_admin_menu() {

		$current_screen = get_current_screen();
		return ( 'udb_widgets_page_udb_admin_menu' === $current_screen->id ? true : false );

	}
}
