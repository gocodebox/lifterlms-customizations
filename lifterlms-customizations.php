<?php
/**
* Plugin Name: LifterLMS Customizations
* Plugin URI: https://lifterlms.com/
* Description: Add custom functions to LifterLMS or LifterLMS LaunchPad and preserve them when updating!
* Version: 1.0.0
* Author: codeBOX
* Author URI: http://gocodebox.com
* Text Domain: lifterlms-customizations
* Domain Path: /languages
* License:     GPLv2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Requires at least: 4.0
* Tested up to: 4.6
*
* @package 		LifterLMS
* @category 	Core
* @author 		codeBOX
*/

if ( ! defined( 'ABSPATH' ) ) { exit; } // restrict direct access

/***********************************************************************
 *
 * Add custom functions below this comment
 *
 ***********************************************************************/











/***********************************************************************
 *
 * Add custom functions above this comment
 *
 ***********************************************************************/

/**
 * Add this plugin's "templates" directory to the list of available override directories
 *
 * If you plan on including template overrides in this plugin, please uncomment the line immediately
 * below this function. It is commented out by default to prevent unnecessary lookups
 * for people who don't intend to include any template overrides in this plugin
 *
 * @param  array $dirs    Array of paths to directories to load LifterLMS templates from
 * @return array
 */
function llms_customizations_overrides_directory( $dirs ) {
	array_unshift( $dirs, plugin_dir_path( __FILE__ ) . '/templates' );
	return $dirs;
}
// add_filter( 'lifterlms_theme_override_directories', 'llms_customizations_overrides_directory', 10, 1 );
