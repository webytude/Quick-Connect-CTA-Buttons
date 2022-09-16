<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://webytude.com
 * @since             1.0.0
 * @package           Quick_Connect_Cta_Buttons
 *
 * @wordpress-plugin
 * Plugin Name:       Quick Connect CTA Buttons
 * Plugin URI:        http://webytude.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Webytude
 * Author URI:        http://webytude.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quick-connect-cta-buttons
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
define( 'QUICK_CONNECT_CTA_BUTTONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-quick-connect-cta-buttons-activator.php
 */
function activate_quick_connect_cta_buttons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quick-connect-cta-buttons-activator.php';
	Quick_Connect_Cta_Buttons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-quick-connect-cta-buttons-deactivator.php
 */
function deactivate_quick_connect_cta_buttons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quick-connect-cta-buttons-deactivator.php';
	Quick_Connect_Cta_Buttons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_quick_connect_cta_buttons' );
register_deactivation_hook( __FILE__, 'deactivate_quick_connect_cta_buttons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-quick-connect-cta-buttons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_quick_connect_cta_buttons() {

	$plugin = new Quick_Connect_Cta_Buttons();
	$plugin->run();

}
run_quick_connect_cta_buttons();
