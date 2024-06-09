<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           WC Custom Gateway
 *
 * @wordpress-plugin
 * Plugin Name:       WC_CUSTOM_GATEWAY
 * Plugin URI:        https://sohag.xyz
 * Description:       Custom Payment gateway
 * Version:           1.0.0
 * Author:            Sohag Srz
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-custom-gateway
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-custom-gateway-activator.php
 */
function activate_wc_custom_gateway() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-custom-gateway-activator.php';
	WC Custom Gateway_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-custom-gateway-deactivator.php
 */
function deactivate_wc_custom_gateway() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-custom-gateway-deactivator.php';
	WC Custom Gateway_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_custom_gateway' );
register_deactivation_hook( __FILE__, 'deactivate_wc_custom_gateway' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc-custom-gateway.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_custom_gateway() {

	$plugin = new WC Custom Gateway();
	$plugin->run();

}
run_wc_custom_gateway();