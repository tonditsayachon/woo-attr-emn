<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.emonics.net/
 * @since      1.0.0
 *
 * @package    Woo_Attr_Emn
 * @subpackage Woo_Attr_Emn/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Attr_Emn
 * @subpackage Woo_Attr_Emn/includes
 * @author     Emonics Solution <emonics.dev@gmail.com>
 */
class Woo_Attr_Emn_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-attr-emn',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
