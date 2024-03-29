<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              mailto:aabozaid0094@gmail.com
 * @since             1.0.0
 * @package           Cptss
 *
 * @wordpress-plugin
 * Plugin Name:       CPT Swiper Slider
 * Plugin URI:        mailto:aabozaid0094@gmail.com
 * Description:       Custom post type Swiper Slider WordPress plugin.
 * Version:           1.0.0
 * Author:            Ahmed Abo Zaid
 * Author URI:        mailto:aabozaid0094@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cptss
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
define( 'CPTSS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cptss-activator.php
 */
function activate_cptss() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cptss-activator.php';
	Cptss_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cptss-deactivator.php
 */
function deactivate_cptss() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cptss-deactivator.php';
	Cptss_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cptss' );
register_deactivation_hook( __FILE__, 'deactivate_cptss' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cptss.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cptss() {

	$plugin = new Cptss();
	$plugin->run();

}
run_cptss();
