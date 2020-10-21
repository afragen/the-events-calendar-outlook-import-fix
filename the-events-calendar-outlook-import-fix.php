<?php
/**
 * Plugin Name:       The Events Calendar Outlook Import Fix
 * Plugin URI:        https://github.com/afragen/the-events-calendar-outlook-import-fix
 * Description:       This plugin fixes the import of calendar events from <a href="http://wordpress.org/plugins/the-events-calendar/">The Events Calendar</a> to Outlook.
 * Version:           1.0.5.2
 * Author:            Andy Fragen
 * Author URI:        http://wp.me/p3OvSb-kF
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/afragen/the-events-calendar-outlook-import-fix
 * Requires WP:       3.7
 * Requires PHP:      5.3
 */

add_filter( 'tribe_ical_properties', 'tribe_ical_outlook_modify', 10, 1 );

function tribe_ical_outlook_modify( $content ) {
	$force_inspector_open = 'X-MS-OLK-FORCEINSPECTOROPEN:TRUE';
	$properties           = explode( PHP_EOL, $content );
	$searchValue          = 'X-WR-CALNAME';
	$fl_array             = preg_grep( '/^' . "$searchValue" . '.*/', $properties );
	$keynum               = key( $fl_array );
	unset( $properties[ $keynum ] );
	// array_splice( $properties, 5, 0, $force_inspector_open);
	$content = implode( "\n", $properties );

	return $content;
}
