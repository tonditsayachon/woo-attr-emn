<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.emonics.net/
 * @since             1.0.0
 * @package           Woo_Attr_Emn
 *
 * @wordpress-plugin
 * Plugin Name:       Woo product attribute & B2B Marketking
 * Plugin URI:        https://www.emonics.net/
 * Description:       Use ACF to create product attributes and display them on WooCommerce product admin pages and on the Vendor Dashboard for B2B marketing
 * Version:           1.0.0
 * Author:            Emonics Solution
 * Author URI:        https://www.emonics.net//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-attr-emn
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WOO_ATTR_EMN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-attr-emn-activator.php
 */
function activate_woo_attr_emn() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-attr-emn-activator.php';
	Woo_Attr_Emn_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-attr-emn-deactivator.php
 */
function deactivate_woo_attr_emn() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-attr-emn-deactivator.php';
	Woo_Attr_Emn_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_attr_emn' );
register_deactivation_hook( __FILE__, 'deactivate_woo_attr_emn' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-attr-emn.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_attr_emn() {

	$plugin = new Woo_Attr_Emn();
	$plugin->run();

}
run_woo_attr_emn();
