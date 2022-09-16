<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://webytude.com
 * @since      1.0.0
 *
 * @package    Quick_Connect_Cta_Buttons
 * @subpackage Quick_Connect_Cta_Buttons/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Quick_Connect_Cta_Buttons
 * @subpackage Quick_Connect_Cta_Buttons/includes
 * @author     Webytude <mann@webytude.com>
 */
class Quick_Connect_Cta_Buttons_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'quick-connect-cta-buttons',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
