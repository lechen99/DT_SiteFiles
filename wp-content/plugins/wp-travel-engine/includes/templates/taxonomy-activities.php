<?php
/**
 * The template for displaying trip activities taxonomy terms. 
 * Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/wp-travel-engine/taxonomy-activities.php.
 * 
 * @package Wp_Travel_Engine
 * @subpackage Wp_Travel_Engine/includes/templates
 * @since @release-version //TODO: change after travel muni is live
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wte_get_template( 'archive-trip.php' );
